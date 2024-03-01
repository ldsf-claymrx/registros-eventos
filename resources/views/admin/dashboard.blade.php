@extends('masterdashboard')

@section('title')
    <title>Panel Principal - Bienvenida</title>
@endsection

@section('PageContent')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Bienvenido a REVEN&reg;</h1>
        <p class="mb-4" style="text-align: justify;">
            REVEN &reg; es un sistema administrador, que tiene el objetivo agilizar procesos de registro 
            para nuevos creyentes, eventos (congresos, desayunos, RAF's etc.), reportes de personas asistentes 
            a un evento, reporte de identificación de creyentes para visitas, escuela ministerial. 
            Todo esto es un sistema centralizado, para consultas, edición e inserción de datos.
        </p>

        <p class="mb-4" style="text-align: justify;">
            Si deseas conocer más información acerca de la Iglesia, aqui te dejamos su 
            <a target="_blank" href="https://casadegloria.com">Pagina Oficial Casa de Gloria&reg;</a>.
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