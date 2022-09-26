<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> {{ Route::currentRouteName() }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Livewire componement -->
    @livewireStyles
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        @if (!(Route::is('login') || Route::is('register')))
            <div class="row bg-secondary py-2 px-xl-5">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark" href="">FAQs</a>
                        <span class="text-muted px-2">|</span>
                        <a class="text-dark" href="">Aide </span>
                            <span class="text-muted px-2">|</span>
                            <a class="text-dark" href="">Assistance</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-dark pl-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endif

        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <img src="{{ asset('img/iconpublicpage.png') }}" alt="" width="60%">
                </a>
            </div>

            <div class="col-lg-6 col-6 text-left ">
                @if (!(Route::is('login') || Route::is('register')))
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Rechercher un véhicule">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                @endif
            </div>


            <div class="col-lg-3 col-6 text-right ">
                @if (!Route::is('home'))
                    <a href="{{ Route('home') }}" class="btn border">Accueil </a>
                @endif
                @if (!Route::is('login'))
                    <a href="{{ Route('login') }}" class="btn border">Mon profil</a>
                @endif
                @if (!Route::is('register'))
                    {{-- <a href="{{ Route('register') }}" class="btn border">Inscription </a> --}}
                @endif
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        @if (!(Route::is('login') || Route::is('register')))
            <div class="row px-xl-5 pt-5">
                <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5 pb-3">
                    <a href="" class="text-decoration-none">
                        <img src="{{ asset('img/iconpublicpage.png') }}" alt="" width="60%">
                    </a>
                    <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna
                        ipsum
                        dolore amet erat.</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Rue 1208, Cotonou , Bénin
                    </p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+229 6xxxxxxx</p>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-dark mb-4">Liens Rapides</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-dark mb-2" href="{{ Route('home') }}"><i
                                        class="fa fa-angle-right mr-2"></i>Accueil</a>
                                <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Catalogue</a>
                                <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>A
                                    propos de nous</a>
                                <a class="text-dark" href="contact.html"><i
                                        class="fa fa-angle-right mr-2"></i>Contactez nous
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 py-4" placeholder="Votre Nom"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 py-4" placeholder="Votre email"
                                        required="required" />
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">Souscrire</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-center text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">AutoRent</a>. All Rights
                    Reserved. Designed by 
                </p>
            </div>
            @if (!(Route::is('login') || Route::is('register')))
                <div class="col-md-6 px-xl-0 text-center text-md-right">
                    <img class="img-fluid" src="img/payments.png" alt="">
                </div>
            @endif

        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- Livewire scripts-->
    @livewireScripts
</body>

</html>
