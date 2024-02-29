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
            <h2 class="text-center">Aggiungi dati optional</h2>
        </div>
        <div class="col-12">
            <form action="{{ route("admin.optionals.store") }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label class="mt-3" for="name">Nome</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nome optional" required  value="{{ old("name")  }}">
                @error('name')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-3" for="Price">Prezzo optional</label>
                <textarea type="text" name="Price" id="Price" class="form-control" placeholder="Prezzo optional " > {{ old("price")  }}</textarea>
                @error('price')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-3" for="type">Tipologia</label>
                <textarea type="text" name="type" id="type" class="form-control" placeholder="Tipologia " > {{ old("type")  }}</textarea>
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