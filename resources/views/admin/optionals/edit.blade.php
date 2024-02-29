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
            <h2 class="text-center">Modifica dati optional</h2>
        </div>
        <div class="col-12">
            <form action="{{ route("admin.optionals.update", $optional->id) }}" method="POST">
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
       

            <a href="{{ route("admin.optionals.index")}}"><button type="submit" class="btn btn-primary mt-3 ">Salva</button></a>
            
            </form>
        </div>
    </div>
</div>
</body>
@endsection