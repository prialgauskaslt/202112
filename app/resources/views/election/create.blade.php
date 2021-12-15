@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nauji rinkimai') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('election.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ __('Rinkimų pavadinimas') }}</label>
                            <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                            @if($errors->has('name'))
                                <span class="help-block" role="alert">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="description">{{ __('Rinkimų aprašymas') }}</label>
                            <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="description" name="description" rows="3">{{ old('description', '') }}</textarea>
                            @if($errors->has('description'))
                                <span class="help-block" role="alert">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="start">{{ __('Rinkmų pradžia') }}</label>
                            <input class="form-control {{ $errors->has('start') ? 'is-invalid' : '' }}" type="datetime-local" name="start" id="start" value="{{ old('start', '') }}">
                            @if($errors->has('start'))
                                <span class="help-block" role="alert">{{ $errors->first('start') }}</span>
                            @endif
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="end">{{ __('Rinkimų pabaiga') }}</label>
                            <input class="form-control {{ $errors->has('end') ? 'is-invalid' : '' }}" type="datetime-local" name="end" id="end" value="{{ old('end', '') }}">
                            @if($errors->has('end'))
                                <span class="help-block" role="alert">{{ $errors->first('end') }}</span>
                            @endif
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="options">{{ __('Kiek balsų galima atiduoti venam balsuojančiam?') }}</label>
                            <input class="form-control {{ $errors->has('options') ? 'is-invalid' : '' }}" type="text" name="options" id="options" value="{{ old('options', '') }}">
                            @if($errors->has('options'))
                                <span class="help-block" role="alert">{{ $errors->first('options') }}</span>
                            @endif
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="candidates">{{ __('Kandidatai (CSV failas, kandidatų vardai)') }}</label>
                            <input type="file" class="form-control-file {{ $errors->has('candidates') ? 'is-invalid' : '' }}" id="candidates" name="candidates">
                            @if($errors->has('candidates'))
                                <span class="help-block" role="alert">{{ $errors->first('candidates') }}</span>
                            @endif
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="voters">{{ __('Balsavimo teisę turintys asmenys (CSV failas, el. paštai)') }}</label>
                            <input type="file" class="form-control-file {{ $errors->has('voters') ? 'is-invalid' : '' }}" id="voters" name="voters">
                            @if($errors->has('voters'))
                                <span class="help-block" role="alert">{{ $errors->first('voters') }}</span>
                            @endif
                        </div>
                        <br>
                        <button class="btn btn-lg btn-success" style="width: 100%" type="submit">
                            {{ __('Sukurti') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
