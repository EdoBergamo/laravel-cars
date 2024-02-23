@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Dashboard admin di Nicholas') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Sei attualmente loggato') }} <br><br>
                    {{ __('Premi su cars nella barra a sinistra per visualizzare la lista delle automobili in vendita') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
