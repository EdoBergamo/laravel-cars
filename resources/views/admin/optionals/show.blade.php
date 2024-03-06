@extends("layouts.app")

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <h2><strong>Nome:</strong> {{ $optional->name}}</h2>
            <h4> <strong>Tipologia:</strong>  {{ $optional->type}}</h4><hr>
            <h4> <strong>Prezzo:</strong> {{ $optional->price}}</h4><hr>
        </div>              
    </div>
</div>
@endsection