@extends('layouts.public')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>

                    <p style="text-align: center;" class="card-title">
                        <b>
                            {{ $election->name ?? '' }}
                        </b>
                    </p>
                    <br>
                    <p style="text-align: center;">
                        <b>BALSAVIMO BIULETENIS</b>
                    </p>
                    <br>
                    <p style="text-align: center;"><b>Renkami 5 (penki) VRM darbo tarybos nariai</b></p>
                    <br>
                    <p>
                        <b>Pasirinkite 5 kandidatus, už kuriuos norite balsuoti</b>
                        <br>
                        (galite pasirinkti ne daugiau kaip 5 kandidatus)
                    </p>
                    <br>
                    <form method="POST" action="{{ route('vote-store', ['hash' => $ballot->hash]) }}">
                        @csrf

                    @foreach($candidates as $candidate)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="{{ $candidate->id }}" name="ballot[]" id="ballot_option_{{ $candidate->id }}">
                            <label class="form-check-label" for="ballot_option_{{ $candidate->id }}">
                                {{ $candidate->candidate ?? '' }}
                            </label>
                        </div>
                        <br>
                    @endforeach
                        <br>
                        <div class="text-center">
                            <button  class="btn btn-lg btn-light" style="border-color: #000;border-radius:0" type="submit">
                                {{ __('BALSUOTI') }}
                            </button>
                        </div>
                    </form>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
