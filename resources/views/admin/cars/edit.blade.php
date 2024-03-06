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
            <form action="{{ route("admin.cars.update", $car->id) }}" method="POST">
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

            <a href="{{ route("admin.cars.index")}}"><button type="submit" class="btn btn-primary mt-3 ">Salva</button></a>
            
            </form>
        </div>
    </div>
</div>
</body>
@endsection