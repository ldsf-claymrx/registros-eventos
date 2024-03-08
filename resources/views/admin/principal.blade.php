@extends('masterdashboard')

@section('title')
    <title>Panel Principal - Bienvenida</title>
@endsection

@section('PageContent')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Bienvenido a HALY&reg;</h1>
        <p class="mb-4" style="text-align: justify;">
            Haly&reg; es un sistema, que tiene el objetivo agilizar procesos de registro 
            para nuevos creyentes, eventos (congresos, desayunos, RAF's, conferencias, etc.), reportes de personas asistentes 
            a un evento, reporte de identificación de creyentes para visitas, asistencias para escuela ministerial, entre otras
            muchas funciones más. Todo en este sistema centralizado llamado Haly&reg;. Aquí podras consultar, agregar, editar y
            eliminar difentes tipos de datos.
        </p>

        <!-- Content Row -->
        <div class="row">

            <!-- Donut Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Genero de las Personas</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <hr>
                        Calculo grafico en porcentajes de Mujeres y Hombre
                        que asisten a la Iglesia.
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection