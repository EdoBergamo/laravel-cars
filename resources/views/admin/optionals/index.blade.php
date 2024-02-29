@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
               <div class="d-flex justify-content-between">
                    <div>
                        <h2>All cars</h2>
                    </div>

                    <div>
                        <a href=" {{ route("admin.optionals.create")}} "><button class="btn btn-primary">Add New Optional</button></a>
                    </div>    
               </div>
            </div>
            <div class="col-12">
                <table class=" table mt-3 table-stipred">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Prezzo</th>
                            <th>Tipologia</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                          @foreach($optionals as $optional)
                            <tr>
                                <td>{{ $optional->id}}</td>
                                <td>{{ $optional->name}}</td>
                                <td>{{ $optional->price}}</td>
                                <td>{{ $optional->type}}</td>
                                <td>
                                    <a href=" {{ route("admin.optionals.update", ['optional' => $optional->id])}} "><button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001"/>
                                      </svg></button></a>
                                </td>
                              {{--   <td>
                                    <a href="{{ route("admin.optionals.show", ["car" => $car->id ])}}"><button class="btn btn-sm btn-square btn-primary"><i class="fas fa-eye"></i></button></a>
                                    <a href="{{ route("admin.cars.edit", ["car" => $car->id ])}}"><button class="btn btn-sm btn-square btn-warning"><i class="fas fa-edit"></i></button></a>
                                    <button class="btn btn-sm btn-square btn-danger" data-bs-toggle="modal" 
                                        data-bs-target="#modal_project_delete-{{ $car->id }}" 
                                        data-carid= "{{ $car->id }}" data-postname="{{ $car->modello }}" >Elimina
                                    </button>
                                    @include("admin.cars.modal_delete")

                                </td> --}}
                        
                            </tr>
                            @endforeach  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    @endsection