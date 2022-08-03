@extends('layouts.app')

@section('template_title')
@endsection

@section('content')
    <!-- Topbar Navbar -->



    <style>
        .container-fluid {
            background: #6a11cb;
            /* fallback for old browsers */
            background-image: url("img/atar.png");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .card {
            border-radius: 5%;
            background: hsla(0, 8%, 53%, 0.2);
            backdrop-filter: blur(0px);
        }
    </style>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid text-center">

        <!-- #adminnnnds ruutas-->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 text class="h3 mb-0 text-gray-800">Administracion Popayan Turims</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <div class="container text-center mt-5 bg-gray">
            <div class="row mt-4">
                <div class="col-sm-12 col-md-4 col-lg-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/puente.jpg" alt="Card image cap">
                        <div class="card-body">
                            <button class="bg-danger">
                            <a href="{{ route('lugars.index') }}"> lugares</a>
                           </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/puente.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('servicios.index') }}"> Servicios</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/puente.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('eventos.index') }}">Eventos</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/puente.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('convenios.index') }}"> convenio</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/puente.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('tiposervicios.index') }}">Tipo servicios</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/puente.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('rols.index') }}"> Roles</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/puente.jpg" alt="Card image cap">
                        <div class="card-body">
                        </div>
                        <a href="{{ route('permisos.index') }}"> permisos</a>

                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/puente.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('tipolugars.index') }}"> Tipo Lugars</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/puente.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('tipoeventos.index') }}">Tipo eventos</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/puente.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('tipconvenios.index') }}">Tipo convenios</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/puente.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('mapas.index') }}"> Mapas</a>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/puente.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('calificasiones.index') }}"> Calificasiones</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/puente.jpg" alt="Card image cap">
                        <div class="card-body">
                        </div>
                        <a href="{{ route('gastronomias.index') }}"> gastronomias</a>

                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/puente.jpg" alt="Card image cap">
                        <div class="card-body">
                        </div>
                        <a href="{{ route('tipoplatos.index') }}"> Tipo Platos</a>

                    </div>
                </div>

            </div>

        </div>

    </div>
    </div>




    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; popayan Turims</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    
@endsection
