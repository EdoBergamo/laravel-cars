@extends("layouts.app")

@section("content")

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Modifica dati optional</h2>
        </div>
        <div class="col-12">
            <form action="{{ route("admin.optionals.update", $optional->id) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">

                <label class="mt-3" for="name">Nome</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nome"  value="{{ $optional->name }}">
                @error('name')

                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-3" for="price">Prezzo</label>

                <input type="number" name="price" id="price" class="form-control" placeholder="Prezzo" value="{{ $optional->price }}">

                @error('price')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-3" for="type">Tipo</label>
                <select class="form-select" name="type">
                    <option value="Cerchi in lega" {{ $optional->type == 'Cerchi in lega' ? 'selected' : '' }}>Cerchi in lega</option>
                    <option value="Sedili riscaldati" {{ $optional->type == 'Sedili riscaldati' ? 'selected' : '' }}>Sedili riscaldati</option>
                    <option value="Interni in pelle" {{ $optional->type == 'Interni in pelle' ? 'selected' : '' }}>Interni in pelle</option>
                    <option value="Fari xenon" {{ $optional->type == 'Fari xenon' ? 'selected' : '' }}>Fari xenon</option>
                    <option value="Impianto audio premium" {{ $optional->type == 'Impianto audio premium' ? 'selected' : '' }}>Impianto audio premium</option>
                </select>


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