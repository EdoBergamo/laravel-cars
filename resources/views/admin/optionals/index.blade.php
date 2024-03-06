@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4">
               <div class="d-flex justify-content-between">
                    <div>
                        <h2>All Optionals</h2>
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
                                    <a href="{{ route("admin.optionals.show", ["optional" => $optional->id ])}}"><button class="btn btn-sm btn-square btn-primary"><i class="fas fa-eye"></i></button></a>
                                    <a href="{{ route("admin.optionals.edit", ["optional" => $optional->id ])}}"><button class="btn btn-sm btn-square btn-warning"><i class="fas fa-edit"></i></button></a>

                                      <button class="btn btn-sm btn-square btn-danger" data-bs-toggle="modal" 
                                        data-bs-target="#modal_project_delete-{{ $optional->id }}" 
                                        data-id= "{{ $optional->id }}" data-name="{{ $optional->name }}" data-type="optionals">Elimina
                                    </button>
                                    @include("admin.optionals.modal_delete_optional")  
 
                                </td>
                        
                            </tr>
                            @endforeach  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    @endsection