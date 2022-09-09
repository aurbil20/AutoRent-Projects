<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutoRent - Login</title>
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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="position-relative">
        <!-- Content and Footer Start -->
        <div class="position-absolute">
            <!-- Content Start -->
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-7">
                        <img src="{{ asset('img/illustration/12085707_20944201.jpg') }}" class="mx-auto d-block" alt=""
                            style="width:80%">
                    </div>
                    <!-- Form Start -->
                    <div class="col-5 py-5 bg-primary d-flex align-content-center flex-wrap">
                        <div class=" col-12 py-3 text-center">
                            <h1 style="color:white"> Connexion </h1>
                        </div>
                        <div class=" col-10 rounded p-4 bg-white mx-auto">
                            <form>
                                @csrf
                                <div class=" px-2">
                                    <div class="pt-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="email"
                                                placeholder="Gurdian Name" name="name" />
                                            <label for="gname">Email :</label>
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="pswd"
                                                placeholder="Gurdian Email" />
                                            <label for="gmail">Votre adresse mail</label>
                                        </div>
                                    </div>
                                    <div class="pt-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="check" id="check">
                                            <p>Rester connecté(e)</p>
                                        </div>
                                    </div>
                                    <div class=" col-8 mx-auto">
                                        <button class="btn btn-primary p-2 col-12" type="submit">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Form End -->
                </div>
            </div>
            <!-- Content End  -->
            <!-- Footer Start -->
            <footer>
                <div class="bg-dark footer py-3 ">
                    <div class="row text-center">
                        <p>&copy; <a href="#">AutoRent</a>, All Right Reserved.</p>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->
        </div>
        <!-- Content and Footer End -->
        <!-- Navbar Start -->
        <div class="position-absolute col-12 bg-transparent">
            <nav class="navbar navbar-expand-lg  sticky-top px-4 px-lg-5">
                <a href="index.html" class="navbar-brand d-flex align-items-center">
                    <h1 class="m-0">
                        <img class="img-fluid me-3" src="{{ asset('img/icon/icon-02-primary.png') }}" alt="" />Insure
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">

                </div>
                <a href="" class="btn btn-primary px-3 d-none d-lg-block">Acceuil</a>
            </nav>
        </div>
        <!-- Navbar End -->
    </div>
</body>

</html>