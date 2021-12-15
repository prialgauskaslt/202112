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
                    <p style="text-indent: 50px; margin-bottom: 0" class="card-text">
                    Vadovaudamiesi Lietuvos Respublikos darbo kodekso 171 straipsnio 7 dalimi, teikiame balsavimo biuletenio formą, su kuria turite susipažinti pasirašytinai, kad galėtumėte balsuoti.
                    </p>
                    <p style="text-indent: 50px; margin-bottom: 0" class="card-text">
                    Prašome prie DVS užduoties paspausti „Atlikta“, taip patvirtindami balsavimo biuletenio Jums įteikimą.
                    </p>
                    <p style="text-indent: 50px; margin-bottom: 0" class="card-text">
                    Vidaus reikalų ministerijos darbo tarybos rinkimų metu bus vykdomas elektroninis balsavimas elektroninio balsavimo platformoje, vadovaujantis Lietuvos Respublikos darbo kodekso 171 straipsnio 16 dalimi.
                    </p>
                    <p style="text-indent: 50px; margin-bottom: 0" class="card-text">
                    Individuali balsavimo nuoroda rinkimų dieną Jums bus atsiųsta elektroniniu paštu.
                    </p>
                    <p style="text-indent: 50px; margin-bottom: 0" class="card-text">
                    <b>Balsavimo nuoroda bus aktyvi tik 2021 m. gruodžio 17 d. nuo 7.00 val. iki 17.00 val.</b>
                    </p>
                    <br>
                    <div>
                        <div style="float:left">VRM darbo tarybos rinkimų komisijos pirmininkė</div>
                        <div style="float: right">Inga Prialgauskienė</div>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
