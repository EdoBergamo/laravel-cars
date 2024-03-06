@extends("layouts.admin")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
               <div class="d-flex justify-content-between">
                    <div>
                        <h2>All cars</h2>
                    </div>

                    <div>
                        <a href=" {{ route("admin.cars.create")}} "><button class="btn btn-primary">Add New Car</button></a>
                    </div>    
               </div>
            </div>
            <div class="col-12">
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
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                          @foreach($cars as $car)
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
                                <td>
                                    <a href="{{ route("admin.cars.show", ["car" => $car->id ])}}"><button class="btn btn-sm btn-square btn-primary"><i class="fas fa-eye"></i></button></a>
                                    <a href="{{ route("admin.cars.edit", ["car" => $car->id ])}}"><button class="btn btn-sm btn-square btn-warning"><i class="fas fa-edit"></i></button></a>
                                    <button class="btn btn-sm btn-square btn-danger" data-bs-toggle="modal" 
                                        data-bs-target="#modal_project_delete-{{ $car->id }}" 
                                        data-carid= "{{ $car->id }}" data-postname="{{ $car->modello }}" >Elimina
                                    </button>
                                    @include("admin.cars.modal_delete")

                                </td>
                        
                            </tr>
                            @endforeach  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    @endsection