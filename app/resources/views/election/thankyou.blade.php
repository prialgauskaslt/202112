@extends('layouts.public')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Rinkimai</div>

                <div class="card-body">
                    <p class="card-text">{{ __('Jūsų biuletenio duomenys priimti. Ačiū, kad balsavote.') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
