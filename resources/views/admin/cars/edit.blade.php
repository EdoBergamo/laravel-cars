@extends("layouts.app")

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <h2 class="text-center">Modifica dati auto</h2>
        </div>
        <div class="col-12">
            <form action="{{ route("admin.cars.update", $car->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label class="mt-3" for="marca">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control" placeholder="Marca" required  value="{{ old("marca") ?? $car->marca }}">
                @error('marca')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-3" for="modello">Modello</label>
                <textarea type="text" name="modello" id="modello" class="form-control" placeholder="Modello " > {{ old("modello") ?? $car->modello }}</textarea>
                @error('modello')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                @if($car->cover_image != null)
                <div class="my-3">

                    <img src="{{ asset("/storage/" . $car->cover_image) }}" 	alt = "{{ $car->name }}" width="200">
                </div>
                @else
                    <h4> Immagine non impostata </h4>
                @endif
                <label class="mt-3" for="cover_image">Immagine di copertina</label>
                <input type="file" name="cover_image" id="cover_image" accept="image/*" class="form-control" placeholder="Descrizione fumetto">
                @error('cover_image')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <label for="car_house">Case automobilistiche</label>
            @foreach($carhouses as $carhouse)
                <input type="radio" name="carhouse_id" id="carhouse-{{ $carhouse->id}}" class="form-check-input mx-2" value="{{ $carhouse->id }}">
                <label for="" class="form-check-label" >  {{ $carhouse->name }}</label>
            @endforeach

            <div class="mt-2">
                <label for="optional">Optional</label>
                @foreach($optionals as $optional)
                    <input type="checkbox" name="optionals[]" id="optional-{{ $optional->id}}" class="form-check-input" value="{{ $optional->id }}">
                    <label for="" class="form-check-label" >  {{ $optional->name }}</label>
                @endforeach

            </div>

            <div class="form-group">
                <label class="mt-3" for="alimentazione">Alimentazione</label>
                <textarea type="text" name="alimentazione" id="alimentazione" class="form-control" placeholder="Alimentazione " > {{ old("alimentazione") ?? $car->alimentazione }}</textarea>
                @error('alimentazione')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-3" for="prezzo">Prezzo</label>
                <textarea type="text" name="prezzo" id="prezzo" class="form-control" placeholder="Prezzo " > {{ old("prezzo") ?? $car->prezzo }}</textarea>
                @error('prezzo')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-3" for="num_porte">Numero porte</label>
                <textarea type="text" name="num_porte" id="num_porte" class="form-control" placeholder="Numero porte" > {{ old("num_porte") ?? $car->num_porte }}</textarea>
                @error('num_porte')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-3" for="chilometri">Km</label>
                <textarea type="text" name="chilometri" id="chilometri" class="form-control" placeholder="Km auto" > {{ old("chilometri") ?? $car->chilometri }}</textarea>
                @error('chilometri')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-3" for="colore">Colore</label>
                <textarea type="text" name="colore" id="colore" class="form-control" placeholder="Colore auto" > {{ old("colore") ?? $car->colore }}</textarea>
                @error('colore')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-3" for="anno">Anno</label>
                <textarea type="text" name="anno" id="anno" class="form-control" placeholder="Descrizione fumetto" > {{ old("anno") ?? $car->anno }}</textarea>
                @error('anno')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <a href="{{ route("admin.cars.index")}}"><button type="submit" class="btn btn-primary m-3 ">Salva</button></a>
            
            </form>
        </div>
    </div>
</div>
</body>
@endsection