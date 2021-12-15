@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Rinkimai') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5 class="card-title">{{ $election->name ?? '' }} ({{ $election->start ?? '' }} - {{ $election->end ?? '' }})</h5>
                    <p class="card-text">{{ $election->description ?? '' }}</p>
                    <br>
                    <br>
                    <p class="card-text">
                        <b>{{ __('Kandidatai:') }}</b>
                    </p>
                    <ul>
                @foreach ($candidates as $candidate)
                        <li>
                            {{ $candidate->candidate ?? '' }} (Balsai: {{ $candidate->votes ?? '' }})
                        </li>
                @endforeach
                    </ul>

                    <br>
                    <p class="card-text">
                        <b>{{ __('Rinkimo teisę turintys asmenys:') }}</b>
                    </p>
                    <ul>
                @foreach ($voters as $voter)
                        <li>
                            {{ $voter->email ?? '' }}
                        </li>
                @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
