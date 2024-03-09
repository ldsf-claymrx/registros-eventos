@extends('masterdashboard')

@section('title')
    <!-- Custom styles for this page -->
    <link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <title>REVEN - Usuarios</title>
@endsection

@section('PageContent')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tabla de Usuarios</h1>
        <p class="mb-4" style="text-align: justify">
            En esta sección, usted puede visualizar, editar y eliminar los usuarios registrados
            a nivel administrador u/o editor.
        </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Usuarios Registrados</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Paterno</th>
                                <th>Materno</th>
                                <th>Correo</th>
                                <th>Cargo</th>
                                <th>Activo</th>
                                <th>Nivel</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Paterno</th>
                                <th>Materno</th>
                                <th>Correo</th>
                                <th>Cargo</th>
                                <th>Activo</th>
                                <th>Nivel</th>
                                <th>Acciones</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->nombre }}</td>
                                <td>{{ $usuario->ape_paterno }}</td>
                                <td>{{ $usuario->ape_materno }}</td>
                                <td>{{ $usuario->correo }}</td>
                                <td>{{ $usuario->id_cargo }}</td>
                                <td>{{ $usuario->activo }}</td>
                                <td>{{ $usuario->nivel }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{$usuario->id}}"><i class="fas fa-fw fa-pen"></i></button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#delete{{$usuario->id}}"><i class="fas fa-fw fa-trash"></i></button>
                                    </div>
                                </td>

                                <div class="modal fade" id="edit{{$usuario->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" enctype="multipart/form-data">
                                                <div class="card shadow mb-4">
                                                    <!-- Card Header - Dropdown -->
                                                    <div class="card-header py-3">
                                                        <h6 class="m-0 font-weight-bold text-primary">Estas por editar a {{ $usuario->nombre }}</h6>
                                                    </div>
                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="">Nombre(s):</label>
                                                            <input type="text" class="form-control form-control-user" id="nombre" name="nombre" value="{{ $usuario->nombre }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label for="">Apellido Paterno:</label>
                                                                        <input type="text" class="form-control form-control-user" id="ape_paterno" name="ape_paterno" value="{{ $usuario->ape_paterno }}" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group">
                                                                        <label for="">Apellido Materno:</label>
                                                                        <input type="text" class="form-control form-control-user" id="ape_materno" name="ape_materno" value="{{ $usuario->ape_materno }}" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Correo Electronico:</label>
                                                            <input type="email" class="form-control form-control-user" id="correo" name="correo" value="{{ $usuario->correo }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Contraseña:</label>
                                                            <input type="password" class="form-control form-control-user" id="contra" name="contra" required>
                                                        </div>
                            
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label for="">Cargo:</label>
                                                                        <select name="cargo" id="cargo" class="form-control form-control-user" required>
                                                                            <option selected="true" disabled="disabled">Seleccione una opción</option>
                                                                            <option value="1">Pastorado</option>
                                                                            <option value="2">Líder</option>
                                                                            <option value="3">Levita</option>
                                                                            <option value="4">Servidor</option>
                                                                            <option value="5">Intercesor</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label for="">Activo:</label>
                                                                        <select name="activo" id="activo" class="form-control form-control-user" required>
                                                                            <option selected="true" disabled="disabled">Seleccione una opción</option>
                                                                            <option value="1">Si</option>
                                                                            <option value="2">No</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label for="">Nivel:</label>
                                                                        <select name="nivel" id="nivel" class="form-control form-control-user" required>
                                                                            <option selected="true" disabled="disabled">Seleccione una opción</option>
                                                                            <option value="1">Administrador</option>
                                                                            <option value="2">Editor</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <input type="submit" class="btn btn-primary" value="Editar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="delete{{$usuario->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" enctype="multipart/form-data">
                                                <div class="card shadow mb-4">
                                                    <!-- Card Header - Dropdown -->
                                                    <div class="card-header py-3">
                                                        <h6 class="m-0 font-weight-bold text-primary">¡Advertencia!</h6>
                                                    </div>
                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                        @csrf
                                                        @method('DELETE')
                                                        <label for="">¿Estás seguro de eliminar a {{ $usuario->nombre }}?</label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <input type="submit" class="btn btn-primary" value="Eliminar">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

@section('scripts-personales')
    <!-- Page level plugins -->
    <script src="{{ url('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('js/demo/datatables-demo.js') }}"></script>
    <script src="{{ asset('js/RUDusers.js') }}"></script>
@endsection