@extends('publicpages.layout')

@section('content')
    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                    data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
                    id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Transport <i
                                    class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Familial</a>
                                <a href="" class="dropdown-item"></a>
                                <a href="" class="dropdown-item">Transport en commun</a>
                                <a href="" class="dropdown-item">Transport de logistique</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Coupés</a>
                        <a href="" class="nav-item nav-link">SUV</a>
                        <a href="" class="nav-item nav-link">Berlines</a>
                        <a href="" class="nav-item nav-link">Limousine</a>
                        <a href="" class="nav-item nav-link">Pick up</a>
                        <a href="" class="nav-item nav-link">Crossover</a>
                        <a href="" class="nav-item nav-link">Utilitaire</a>
                        <a href="" class="nav-item nav-link">4x4</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <img src="{{ asset('img/iconpublicpage.png') }}" alt="" width="60%">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ Route('home') }}" class="nav-item nav-link">Home</a>
                            <a href="{{ Route('catalogue') }}" class="nav-item nav-link">Catalogue</a>
                            <a href="{{ Route('aboutus') }}" class="nav-item nav-link">A propos de nous</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Réservation</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Accueil</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Réservation</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    
    <!-- Send id parameter to livewire -->
    @livewire('do-reservation', ['id' => $id])

@endsection

@section('others_scripts')
    <script src="{{ asset('js/payment.js') }}"></script>
@endsection
