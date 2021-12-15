<?php

namespace App\Mail;

use App\Models\Ballot;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VoteBallot extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The ballot instance.
     *
     * @var \App\Models\Ballot
     */
    public $ballot;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Ballot $ballot)
    {
        $this->ballot = $ballot;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('BALSAVIMO BIULETENIS')->view('emails.ballot');
    }
}
