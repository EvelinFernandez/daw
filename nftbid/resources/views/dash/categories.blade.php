@extends('dash.layouts.main')
@section('contenido')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Categorias</h1>
        <a href="#" data-toggle="modal" data-target="#modalAdd" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-upload fa-sm text-white-50"></i> Agregar Categorias</a>
        </div>
            <!-- ERRORES-->
            @if($message = Session::get('ErrorInsert'))
            <div class="row alert alert-danger alert-dismissable fade show" role="alert">
                <h5>Error: {{$message}}</h5>
                <br><br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">

            <!--SUCCESS  -->
            @if($message = Session::get('Listo'))
                <div class="row alert alert-success fade show">
                    <h5 class="col-12"> <i class="fa fa-check"></i> Alerta</h5> 
                    <br>
                    <br>
                    <p>{{ $message }}</p>
                </div>
            @endif

            <!-- PRINT CATEGORIES -->
            <div class="row col-12">
                @foreach($cates as $c)
                    <div class="card col-3" >
                        <img class="card-img-top" 
                            src="{{ asset('/categories/'.$c->img) }}" 
                            alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">{{ $c->category }}</h5>
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>




    </div>
    <!--MODAL AGREGAR-->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalAdd">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Agregar Categorias</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form action="/admin/categorias" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" placeholder="Categoria" name="name" id="" value="{{ old('name') }}">
                          </div>
                        <div class="form-group">
                            <label for="">Imagen</label>
                            <input type="file" class="form-contro l" name="img" id="" value="{{ old('img') }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
      </div>
</div>
    
@endsection