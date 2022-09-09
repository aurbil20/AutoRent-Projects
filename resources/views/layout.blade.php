<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- Header Start -->
    <header>
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-7 px-5 text-start">
                    <div class="h-100 d-inline-flex align-items-center me-4">
                        <small class="fa fa-phone-alt me-2"></small>
                        <small>+012 345 6789</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center me-4">
                        <small class="far fa-envelope-open me-2"></small>
                        <small>info@example.com</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center me-4">
                        <small class="far fa-clock me-2"></small>
                        <small>Mon - Fri : 09 AM - 09 PM</small>
                    </div>
                </div>
                <div class="col-lg-5 px-5 text-end">
                    <div class="h-100 d-inline-flex align-items-center">
                        <a class="text-white-50 ms-4" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="text-white-50 ms-4" href=""><i class="fab fa-twitter"></i></a>
                        <a class="text-white-50 ms-4" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="text-white-50 ms-4" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
            <a href="index.html" class="navbar-brand d-flex align-items-center">
                <h1 class="m-0">
                    <img class="img-fluid me-3" src="{{ asset('img/icon/icon-02-primary.png') }}" alt="" />Insure
                </h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
                    <a href="#" class="nav-item nav-link active">Accueil</a>
                    <a href="#" class="nav-item nav-link">Notre catalogue</a>
                    <a href="#" class="nav-item nav-link">Nous contacter</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Réservation</a>
                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="#" class="dropdown-item">Faire ma réservation</a>
                    <a href="#" class="dropdown-item">Modifier ma réservation</a>
                </div>
            </div>
            <a href="" class="btn btn-primary px-3 d-none d-lg-block">Se connecter</a>
        </nav>
        <!-- Navbar End -->
    </header>
    <!-- Header End -->

    <!-- Main content Start -->
    <main>
        @yield('content')
    </main>
    <!-- Main content End -->

    <!-- Footer Start -->
    <footer>
        <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h1 class="text-white mb-4">
                            <img class="img-fluid me-3" src="{{ asset('img/icon/icon-02-light.png') }}" alt="" />Insure
                        </h1>
                        <p>
                            Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                            ipsum et lorem et sit, sed stet lorem sit clita
                        </p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Address</h5>
                        <p>
                            <i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA
                        </p>
                        <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Quick Links</h5>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Our Services</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email" />
                            <button type="button"
                                class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">
                                SignUp
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a href="#">AutoRent</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>