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
                <label class="mt-3" for="marca">Nome</label>
                <input type="text" name="marca" id="marca" class="form-control"  required  value="{{ old("marca") ?? $optional->name }}">
                @error('marca')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-3" for="price">Prezzo</label>
                <textarea type="text" name="price" id="price" class="form-control"> {{ old("modello") ?? $optional->price }}</textarea>
                @error('price')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-3" for="type">Tipologia</label>
                <textarea type="text" name="type" id="type" class="form-control"  > {{ old("type") ?? $optional->type }}</textarea>
                @error('type')
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