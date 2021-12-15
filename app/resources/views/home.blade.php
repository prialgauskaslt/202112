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

                    <a href="{{ route('election.create') }}" class="btn btn-success">Nauji rinkimai</a>

                    <br>
                    <br>

                @if(!$elections->isEmpty())
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pavadinimas</th>
                                <th scope="col">Išsiųsta biuletenių</th>
                                <th scope="col">Sunaudota biultetenių/prabalsuota</th>
                                <th scope="col">Pradžia</th>
                                <th scope="col">Pabaiga</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($elections as $election)
                            <tr>
                                <th scope="row">{{ $election->id }}</th>
                                <td>{{ $election->name}}</td>
                                <td>{{ $election->emails_sent ?? 0 }}</td>
                                <td>{{ $election->votes ?? 0 }}</td>
                                <td>{{ $election->start ?? '' }}</td>
                                <td>{{ $election->end ?? '' }}</td>
                                <td>
                                    <b>
                                        <a class="btn btn-primary" href="{{ route('election.show', $election->id) }}">Peržiūrėti</a>
                                    </b>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-info">
                        {{ __('Nėra rinkimų. Sukurkite naujus.') }}
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
