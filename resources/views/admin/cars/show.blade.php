@extends("layouts.admin")

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <table class=" table mt-3 table-stipred">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Marca</th>
                        <th>Modello</th>
                        <th>Alimentazione</th>
                        <th>Prezzo</th>
                        <th>Numero porte</th>
                        <th>Km</th>
                        <th>Colore</th>
                        <th>Anno</th>
                       
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>{{ $car->id}}</td>
                            <td>{{ $car->marca}}</td>
                            <td>{{ $car->modello}}</td>
                            <td>{{ $car->alimentazione}}</td>
                            <td>{{ $car->prezzo}}</td>
                            <td>{{ $car->num_porte}}</td>
                            <td>{{ $car->chilometri}}</td>
                            <td>{{ $car->colore}}</td>
                            <td>{{ $car->anno}}</td>
                        </div>
                    </tr>
    </div>
</div>


@endsection