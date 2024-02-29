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
            <h2 class="text-center">Modifica dati Casa Automobilistica</h2>
        </div>
        <div class="col-12">
            <form action="{{ route("admin.carhouses.update", $carhouse->id) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">

                <label class="mt-3" for="name">Nome</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nome"  value="{{ $carhouse->name }}">
                @error('name')

                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-3" for="phone_number">Numero di telefono</label>

                <input type="number" name="phone_number" id="phone_number" class="form-control" placeholder="Prezzo" value="{{ $carhouse->phone_number }}">

                @error('price')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-3" for="email">  Email</label>

                <input type="number" name="email" id="email" class="form-control"  value="{{ $carhouse->email }}">

                @error('price')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="mt-3" for="sede">  Sede</label>

                <input type="number" name="sede" id="sede" class="form-control"  value="{{ $carhouse->sede }}">

                @error('price')
                    <div class ="text-danger">{{ $message }}</div>
                @enderror
            </div>
       

            <a href="{{ route("admin.carhouses.index")}}"><button type="submit" class="btn btn-primary mt-3 ">Salva</button></a>
            
            </form>
        </div>
    </div>
</div>
</body>
@endsection