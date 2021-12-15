<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreElectionRequest;
use App\Mail\VoteBallot;
use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\Election;
use App\Models\Voter;
use Carbon\Carbon;
use Illuminate\Support\Str;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ElectionController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('election.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreElectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreElectionRequest $request)
    {
        $candidatesListFile = $request->file('candidates')->getRealPath();
        $candidatesList = array_map(function($v){return str_getcsv($v, ";");}, file($candidatesListFile));

        $votersListFile = $request->file('voters')->getRealPath();
        $votersList = array_map(function($v){return str_getcsv($v, ";");}, file($votersListFile));

        if (empty($candidatesList) || empty($votersList)) {
            return redirect()->back();
        }

        // create election
        $election = Election::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'options' => $request->input('options'),
            'start' => $request->input('start'),
            'end' => $request->input('end')
        ]);

        // create candidates
        foreach ($candidatesList as $candidate) {
            Candidate::create([
                'election_id' => $election->id,
                'candidate' => $candidate[0]
            ]);
        }

        // store voters and send ballots
        $numberOfVoters = 0;
        foreach ($votersList as $voter) {
            if (!empty($voter[0])) {
                Voter::create([
                    'election_id' => $election->id,
                    'email' => $voter[0]
                ]);
                $numberOfVoters++;

                $ballot = Ballot::create([
                    'election_id' => $election->id,
                    'hash' => Str::random(20)
                ]);
                Mail::to($voter[0])->send(new VoteBallot($ballot));
                $election->emails_sent++;
                $election->save();
            }
        }

        return redirect()->route('election.show', $election->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Election  $election
     * @return \Illuminate\Http\Response
     */
    public function show(Election $election)
    {
        $candidates = Candidate::where('election_id', $election->id)->get();
        $voters = Voter::where('election_id', $election->id)->get();

        return view('election.show', compact('election', 'candidates', 'voters'));
    }

    public function vote(Request $request, string $hash = '')
    {
        $ballot = Ballot::where('hash', $hash)->first();
        if (empty($ballot)) {
            abort(404);
        }

        $election = Election::where('id', $ballot->election_id)->first();
        if (empty($election)) {
            abort(404);
        }

        // check if election time is now
        $startDate = Carbon::createFromFormat('Y-m-d H:i:s', $election->start);
        $endDate = Carbon::createFromFormat('Y-m-d H:i:s', $election->end);
        $check = Carbon::now()->between($startDate, $endDate);
        if (!$check) {
            abort(404);
        }

        $candidates = Candidate::where('election_id', $election->id)->get();
        if (empty($candidates)) {
            abort(404);
        }

        return view('election.vote', compact('ballot', 'election', 'candidates'));
    }

    public function voteStore(Request $request, string $hash = '')
    {
        $ballotValues = $request->input('ballot');

        $ballot = Ballot::where('hash', $hash)->first();
        if (empty($ballot)) {
            abort(404);
        }

        $election = Election::where('id', $ballot->election_id)->first();
        if (empty($election)) {
            abort(404);
        }

        // check if election time is now
        $startDate = Carbon::createFromFormat('Y-m-d H:i:s', $election->start);
        $endDate = Carbon::createFromFormat('Y-m-d H:i:s', $election->end);
        $check = Carbon::now()->between($startDate, $endDate);
        if (!$check) {
            abort(404);
        }

        // to many options selected
        if (count($ballotValues) > $election->options) {
            return redirect()->back();
        }

        // add a votes
        foreach ($ballotValues as $ballotValue) {
            $candidate = Candidate::where('id', $ballotValue)->first();
            if (!empty($candidate)) {
                $candidate->votes = $candidate->votes + 1;
                $candidate->save();
            }
        }

        // increment number of ballots submited
        $election->votes = $election->votes + 1;
        $election->save();

        $ballot->delete();

        return redirect()->route('vote-thankyou');
    }

    public function voteThankyou()
    {
        return view('election.thankyou');
    }
}
