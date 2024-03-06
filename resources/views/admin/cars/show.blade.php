@extends("layouts.app")

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <h4>Marca: </h4>{{ $car->marca}}
            <h4>Modello: </h4>{{ $car->modello}}<hr>
            <h4>Alimentazione: </h4>{{ $car->alimentazione}}<hr>
            <h4>Optional</h4>
            @forelse($car->optionals as $optional)
                {{ $optional->name }}
                @empty
                    Nessun optional selezionato per quest'auto
                @endforelse
            <h4>Prezzo: </h4>{{ $car->prezzo}}
            {{-- <h4>Prezzo complessivo</h4>
                <?php echo sommaPrezzo()
            ?> --}}
            <h4>Numero porte: </h4>{{ $car->num_porte}}
            <h4>Km. : </h4>{{ $car->chilometri}}
            <h4>Colore: </h4>{{ $car->colore}}<hr>
            <h4>Anno:</h4>{{ $car->anno}}<hr>
        </div>
                  
    </div>
</div>


@endsection