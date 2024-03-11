@extends('masterdashboard')

@section('title')
    <title>REVEN - Crear Usuario</title>
@endsection


@section('PageContent')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Crear un Nuevo Usuario</h1>
        <p class="mb-4" style="text-align: justify">
            <b>NOTA IMPORTANTE:</b><br>
            Recomendamos que registre a creyentes de confianza, maduros en la Fé, en los que usted como
            Pastor, Administrador; pueda confiar. Ya que el tendra permiso para eliminar, editar información
            confidencial de vuestros hermanos en la Fé.
        </p>

        <div id="resultado"></div>

        <!-- Content Row -->
        <div class="row justify-content-center">

            <!-- Donut Chart -->
            <div class="col-xl-12 col-lg-12">
                
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Datos del Nuevo Usuario</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form id="form-crearusuario">
                            @csrf
                            <div class="form-group">
                                <label for="">Nombre(s):</label>
                                <input type="text" class="form-control form-control-user" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="">Apellido Paterno:</label>
                                            <input type="text" class="form-control form-control-user" id="ape_paterno" name="ape_paterno" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="">Apellido Materno:</label>
                                            <input type="text" class="form-control form-control-user" id="ape_materno" name="ape_materno" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Correo Electronico:</label>
                                <input type="email" class="form-control form-control-user" id="correo" name="correo" required>
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
                                    <input type="hidden" name="url" id="url" value="{{ url('/saveuser') }}">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Registrar">
                        </form>
                    </div>    
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

@section('scripts-personales')
    <script src="{{ asset('js/creates.js') }}"></script>
@endsection