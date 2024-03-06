@extends("layouts.app")

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <h4>Marca: </h4>{{ $car->marca}}
            <h4>Modello: </h4>{{ $car->modello}}<hr>
            <h4  class="my-3">Immagine rappresentativa dell'auto:</h4>
            <div class="img-auto">

                @if($car->cover_image !== null)
                    <img src="{{ asset("/storage/" . $car->cover_image) }}" alt="{{ $car->name}}" >
                @else
                    <img src="{{ asset("/img/placeholder1.jpg") }}" alt="{{ $car->name}}" >
                @endif
                <h4>Casa Automobilistica</h4>
                {{--  @forelse($car->carhouses as $carhouse)
                    {{ $carhouse->name }}
                    @empty
                        Nessuna  casa automobilistica selezionata per quest'auto
                    @endforelse --}}
                <h4>Alimentazione: </h4>{{ $car->alimentazione}}<hr>
                <h4>Optional</h4>
                @forelse($car->optionals as $optional)
                    {{ $optional->name }}
                    @empty
                        Nessun optional selezionato per quest'auto
                    @endforelse
            </div>
            <h4>Prezzo: </h4>{{ $car->prezzo}}
            <h4>Numero porte: </h4>{{ $car->num_porte}}
            <h4>Km. : </h4>{{ $car->chilometri}}
            <h4>Colore: </h4>{{ $car->colore}}<hr>
            <h4>Anno:</h4>{{ $car->anno}}<hr>
        </div>
                  
    </div>
</div>


@endsection