<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page and logo -->
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon/iconar.ico') }}">

    <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">

    <!-- Livewire Styles-->
    @livewireStyles

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{ asset('img/iconpublicpage.png') }}" alt="" width="60%">
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <!-- Dashboard -->
                        <li class="@if (Route::is('dashboard-admin') || Route::is('dashboard-enterprise')) active @endif has-sub">
                            <a class="js-arrow" @if (Auth::user()->role_id == 1) href="{{ Route('dashboard-admin') }}"
                @elseif (Auth::user()->role_id == 2)
                    href="{{ Route('dashboard-enterprise') }}" @endif>
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <!-- (Enterprise) Auto Parc -->
                        <li class=" @if (Route::is('dashboard-allvehicle') ||
                            Route::is('dashboard-addvehicle') ||
                            Route::is('dashboard-availablevehicle') ||
                            Route::is('dashboard-breakvehicle') ||
                            Route::is('dashboard-changestatevehicule') ||
                            Route::is('dashboard-delvehicle')) active @endif has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Parc Auto
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ Route('dashboard-allvehicle') }}">
                                        <i class="fas fa-tachometer-alt"></i>Tous les véhicules</a>
                                </li>
                                <li>
                                    <a href="{{ Route('dashboard-availablevehicle') }}">
                                        <i class="fas fa-tachometer-alt"></i>Véhicules disponibles</a>
                                </li>
                                <li>
                                    <a href="{{ Route('dashboard-breakvehicle') }}">
                                        <i class="fas fa-tachometer-alt"></i>Véhicules en panne</a>
                                <li>
                                    <a href="{{ Route('dashboard-addvehicle') }}">
                                        <i class="fas fa-tachometer-alt"></i>Ajouter un véhicule</a>
                                </li>
                                <li>
                                    <a href="{{ Route('dashboard-changestatevehicule') }}">
                                        <i class="fas fa-tachometer-alt"></i>Changer l'état d'un véhicule</a>
                                </li>
                                <li>
                                    <a href="{{ Route('dashboard-delvehicle') }}">
                                        <i class="fas fa-tachometer-alt"></i>Supprimer un véhicule</a>
                                </li>
                            </ul>
                        </li>
                        <!-- (Enterprise) Results and payments -->
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Bilan et Payements
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">
                                        <i class="fas fa-tachometer-alt"></i>Voir les activités</a>
                                </li>
                                <li>
                                    <a href="index2.html">
                                        <i class="fas fa-tachometer-alt"></i>Payments effectués</a>
                                </li>
                                <li>
                                    <a href="index3.html">
                                        <i class="fas fa-tachometer-alt"></i>Faire une demande de paie</a>
                                </li>
                            </ul>
                        </li>
                        <!-- (Enterprise) Agencies -->
                        <li class=" @if (Route::is('dashboard-allagencies') || Route::is('dashboard-addagency') || Route::is('dashboard-delagency')) active @endif has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Nos agences
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ Route('dashboard-allagencies') }}">
                                        <i class="fas fa-tachometer-alt"></i>Toutes les agences</a>
                                </li>
                                <li>
                                    <a href="{{ Route('dashboard-addagency') }}">
                                        <i class="fas fa-tachometer-alt"></i>Ajoutez une agence</a>
                                </li>
                                <li>
                                    <a href="{{ Route('dashboard-delagency') }}">
                                        <i class="fas fa-tachometer-alt"></i>Supprimer une agence</a>
                                </li>
                            </ul>
                        </li>
                        <!-- (Admin) Payements -->
                        <li class=" @if (Route::is('dashboard-askpayment') || Route::is('dashboard-donepayment')) active @endif has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Versements "admin"
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ Route('dashboard-askpaymentadmin') }}">
                                        <i class="fas fa-tachometer-alt"></i>Voir les demandes</a>
                                </li>
                                <li>
                                    <a href="{{ Route('dashboard-donepaymentadmin') }}">
                                        <i class="fas fa-tachometer-alt"></i>Versements effectués</a>
                                </li>
                            </ul>
                        </li>
                        <!-- (Admin) Account management-->
                        <li class=" @if (Route::is('dashboard-alladmin') || Route::is('dashboard-allenterprise') || Route::is('dashboard-allclient')) active @endif has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Gérer les comptes
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ Route('dashboard-alladmin') }}">
                                        <i class="fas fa-tachometer-alt"></i>Administrateurs</a>
                                </li>
                                <li>
                                    <a href="{{ Route('dashboard-allenterprise') }}">
                                        <i class="fas fa-tachometer-alt"></i>Entreprises</a>
                                </li>
                                <li>
                                    <a href="{{ Route('dashboard-allclient') }}">
                                        <i class="fas fa-tachometer-alt"></i>Clients</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Parameters-->
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Paramètres </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a
                    @if (Auth::user()->role_id == 1) href="{{ Route('dashboard-admin') }}"
                @elseif (Auth::user()->role_id == 2)
                    href="{{ Route('dashboard-enterprise') }}" @endif>
                    <img src="{{ asset('img/iconpublicpage.png') }}" alt="" width="60%">
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar2 navbar-sidebar3 py-4">
                    <ul class="list-unstyled navbar__list">
                        <!-- Dashboard -->
                        <li class="@if (Route::is('dashboard-admin') || Route::is('dashboard-enterprise')) active @endif has-sub">
                            <a class="js-arrow" @if (Auth::user()->role_id == 1) href="{{ Route('dashboard-admin') }}"
                @elseif (Auth::user()->role_id == 2)
                    href="{{ Route('dashboard-enterprise') }}" @endif>
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>

                        @if (Auth::user()->role_id == 2)
                            <!-- (Enterprise) Auto Parc -->
                            <li class=" @if (Route::is('dashboard-allvehicle') ||
                                Route::is('dashboard-addvehicle') ||
                                Route::is('dashboard-availablevehicle') ||
                                Route::is('dashboard-breakvehicle') ||
                                Route::is('dashboard-changestatevehicule') ||
                                Route::is('dashboard-delvehicle')) active @endif has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Parc Auto
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ Route('dashboard-allvehicle') }}">
                                            <i class="fas fa-tachometer-alt"></i>Tous les véhicules</a>
                                    </li>
                                    <li>
                                        <a href="{{ Route('dashboard-availablevehicle') }}">
                                            <i class="fas fa-tachometer-alt"></i>Véhicules disponibles</a>
                                    </li>
                                    <li>
                                        <a href="{{ Route('dashboard-breakvehicle') }}">
                                            <i class="fas fa-tachometer-alt"></i>Véhicules en panne</a>
                                    <li>
                                        <a href="{{ Route('dashboard-addvehicle') }}">
                                            <i class="fas fa-tachometer-alt"></i>Ajouter un véhicule</a>
                                    </li>
                                    <li>
                                        <a href="{{ Route('dashboard-changestatevehicule') }}">
                                            <i class="fas fa-tachometer-alt"></i>Changer l'état d'un véhicule</a>
                                    </li>
                                    <li>
                                        <a href="{{ Route('dashboard-delvehicle') }}">
                                            <i class="fas fa-tachometer-alt"></i>Supprimer un véhicule</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- (Enterprise) Results and payments -->

                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Bilan et Payements
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="index.html">
                                            <i class="fas fa-tachometer-alt"></i>Voir les activités</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">
                                            <i class="fas fa-tachometer-alt"></i>Payments effectués</a>
                                    </li>
                                    <li>
                                        <a href="index3.html">
                                            <i class="fas fa-tachometer-alt"></i>Faire une demande de paie</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- (Enterprise) Agencies -->
                            <li class=" @if (Route::is('dashboard-allagencies') || Route::is('dashboard-addagency') || Route::is('dashboard-delagency')) active @endif has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Nos agences
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ Route('dashboard-allagencies') }}">
                                            <i class="fas fa-tachometer-alt"></i>Toutes les agences</a>
                                    </li>
                                    <li>
                                        <a href="{{ Route('dashboard-addagency') }}">
                                            <i class="fas fa-tachometer-alt"></i>Ajoutez une agence</a>
                                    </li>
                                    <li>
                                        <a href="{{ Route('dashboard-delagency') }}">
                                            <i class="fas fa-tachometer-alt"></i>Supprimer une agence</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if (Auth::user()->role_id == 1)
                            <!-- (Admin) Payements -->
                            <li class=" has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Versements "admin"
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="index.html">
                                            <i class="fas fa-tachometer-alt"></i>Voir les demandes</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">
                                            <i class="fas fa-tachometer-alt"></i>Versements effectués</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- (Admin) Account management-->
                            <li class=" @if (Route::is('dashboard-alladmin') || Route::is('dashboard-allenterprise') || Route::is('dashboard-allclient')) active @endif has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-tachometer-alt"></i>Gérer les comptes
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ Route('dashboard-alladmin') }}">
                                            <i class="fas fa-tachometer-alt"></i>Administrateurs</a>
                                    </li>
                                    <li>
                                        <a href="{{ Route('dashboard-allenterprise') }}">
                                            <i class="fas fa-tachometer-alt"></i>Entreprises</a>
                                    </li>
                                    <li>
                                        <a href="{{ Route('dashboard-allclient') }}">
                                            <i class="fas fa-tachometer-alt"></i>Clients</a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        <!-- Parameters-->
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Paramètres </a>
                        </li>
                        {{-- <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li> --}}
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap d-flex justify-content-end">
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{ asset('img/icon/avatar-01.jpg') }}" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"> {{ Auth::user()->name }} </a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ asset('img/icon/avatar-01.jpg') }}"
                                                            alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }} </a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }} </span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{ Route('logout') }}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                @yield('content')
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('js/maindash.js') }}"></script>

    <!--Livewire Scripts-->
    @livewireScripts

</body>

</html>
<!-- end document-->
