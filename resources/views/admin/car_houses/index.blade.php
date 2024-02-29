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
                        <a href=" {{ route("admin.optionals.create")}} "><button class="btn btn-primary">Add New Car House</button></a>
                    </div>    
               </div>
            </div>
            <div class="col-12">
                <table class=" table mt-3 table-stipred">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Numero di telefono</th>
                            <th>Email</th>
                             <th>Sede</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                          @foreach($carhouse as $carhouses)
                            <tr>
                                <td>{{ $carhouses->id}}</td>
                                <td>{{ $carhouses->name}}</td>
                                <td>{{ $carhouses->phone_number}}</td>
                                <td>{{ $carhouses->email}}</td>
                                <td>{{ $carhouses->sede}}</td>
                                <td>
                                    {{-- <a href="{{ route("admin.carhouses.show", ["car_houses" => $carhouses->id ])}}"><button class="btn btn-sm btn-square btn-primary"><i class="fas fa-eye"></i></button></a>

                                    <a href="{{ route("admin.carhouses.edit", ["car_houses" => $carhouses->id ])}}"><button class="btn btn-sm btn-square btn-warning"><i class="fas fa-edit"></i></button></a> --}}

                                     {{--  <button class="btn btn-sm btn-square btn-danger" data-bs-toggle="modal" 
                                        data-bs-target="#modal_project_delete-{{ $optional->id }}" 
                                        data-id= "{{ $optional->id }}" data-name="{{ $optional->name }}" data-type="optionals">Elimina
                                    </button>
                                    @include("admin.optionals.modal_delete_optional")  
  --}}                      
                                <a href="{{ route("admin.carhouses.edit", ["carhouse" => $carhouses->id ])}}"><button class="btn btn-sm btn-square btn-warning"><i class="fas fa-edit"></i></button></a>
                                </td>
                        
                            </tr>
                            @endforeach  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    @endsection