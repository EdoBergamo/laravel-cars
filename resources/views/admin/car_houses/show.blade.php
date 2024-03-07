@extends("layouts.app")

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <h2>{{ $carhouse->name}} </h2><hr>
            <h4> <strong>Tipologia:</strong>  {{ $carhouse->phone_number}}</h4><hr>
            <h4> <strong>Prezzo:</strong> {{ $carhouse->email}}</h4><hr>
        </div>              
    </div>
</div>
@endsection