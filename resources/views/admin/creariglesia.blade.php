@extends('masterdashboard')

@section('title')
    <title>REVEN - Crear Iglesia</title>
@endsection


@section('PageContent')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Registrar una Iglesia Nueva</h1>
        <p class="mb-4" style="text-align: justify">
            <b>NOTA IMPORTANTE:</b><br>
            Aquí registrarmos todas las iglesias que existen la posibilidad que asistan a
            nuestro eventos, congresos, etc.
        </p>

        <div id="resultado"></div>

        <!-- Content Row -->
        <div class="row justify-content-center">

            <!-- Donut Chart -->
            <div class="col-xl-12 col-lg-12">
                
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Datos de la nueva Iglesia</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form id="form-creariglesia">
                            @csrf
                            <div class="form-group">
                                <label for="">Nombre(s):</label>
                                <input type="text" class="form-control form-control-user" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="">Dirección:</label>
                                <input type="text" class="form-control form-control-user" id="direccion" name="direccion">
                            </div>
                            <input type="hidden" name="url" id="url" value="{{ url('/saveiglesia') }}">
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