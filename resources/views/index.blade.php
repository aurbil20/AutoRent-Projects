@extends('layout')


@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('img/carousel-1.png') }}" alt="Image" />
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h1 class="display-3 text-dark mb-4 animated slideInDown">
                                    Louez moins chères ! 
                                </h1>
                                <p class="fs-5 text-body mb-5">
                                    Disposez d'un ou plusieurs véhicules de différents modéles à des prix réduits !
                                </p>
                                <a href="" class=" btn btn-primary py-3 px-3 mx-2">Voir le catalogue</a>
                                <a href="" class="btn btn-primary py-3 px-5 mx-2">Faire ma réservation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('img/carousel-2.png') }}" alt="Image" />
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <h1 class="display-3 text-dark mb-4 animated slideInDown">
                                    Adoptez un service de qualité
                                </h1>
                                <p class="fs-5 text-body mb-5">
                                    Le service clientèle est disponible 24h/7j pour vous aider en cas de problèmes. 
                                </p>
                                <a href="" class=" btn btn-primary py-3 px-3 mx-2">Voir le catalogue</a>
                                <a href="" class="btn btn-primary py-3 px-5 mx-2">Faire ma réservation</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden rounded ps-5 pt-5 h-100" style="min-height: 400px">
                    <img class="position-absolute w-100 h-100" src="{{ asset('img/about.jpg') }}" alt="" style="object-fit: cover" />
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div id="about-us" class="h-100">
                    <h1 class="display-6 mb-5">
                        A propos de nous !
                    </h1>
                    <p class="fs-5 text-primary mb-4">
                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet
                        lorem sit clita duo justo erat amet
                    </p>
                    
                    <p class="mb-4">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                        sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Facts Start -->
<div class="container-fluid overflow-hidden my-5 px-lg-0">
    <div class="container facts px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
                <div class="h-100 px-4 ps-lg-0">
                    <h1 class="text-white mb-4">For Individuals And Organisations</h1>
                    <p class="text-light mb-5">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                        sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <a href="" class="align-self-start btn btn-secondary py-3 px-5">More Details</a>
                </div>
            </div>
            <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 px-4 pe-lg-0">
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <h1 class="display-5">+ de 100</h1>
                            <p class="fs-5 text-primary"> Clients</p>
                        </div>
                        <div class="col-sm-6">
                            <h1 class="display-5" >+ de 250</h1>
                            <p class="fs-5 text-primary">Locations faites</p>
                        </div>
                        <div class="col-sm-6">
                            <h1 class="display-5" >250</h1>
                            <p class="fs-5 text-primary">Agences </p>
                        </div>
                        <div class="col-sm-6">
                            <h1 class="display-5" >+ de 75</h1>
                            <p class="fs-5 text-primary">Employés</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->

<!-- Appointment Start -->
<div class="container-fluid appointment my-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div id="contact-us" class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-6 text-white mb-5">
                    Contactez nous !
                </h1>
                <p class="text-white mb-5">
                    Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                    stet lorem sit clita duo justo magna dolore erat amet. Tempor erat
                    elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                    diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
                    clita duo justo magna.
                </p>
                <div class="bg-white rounded p-2">
                    # Icone des réseaux sociaux#
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white rounded p-5">
                    <form>
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 text-center">
                                <h3 class="text-dark">Laissez un commentaire</h3>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="gname" placeholder="Gurdian Name" />
                                    <label for="gname">Votre nom</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="gmail" placeholder="Gurdian Email" />
                                    <label for="gmail">Votre adresse mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 80px"></textarea>
                                    <label for="message">Votre message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-2 px-2" type="submit">
                                    Envoyer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->

<!-- Price Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
            <h1 class="display-6 mb-5">Nos tarifs de location</h1>
        </div>
        <div class="row g-5 align-content-center">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card team-item" style="">
                    <div class="card-body">
                        <h5 class="card-text">A partir de :</h5>
                        <h1 class="card-title"> 5 OOOfrs</h1>
                        <h6 class="card-subtitle mb-2 text-muted">Location par heure</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                        <div class="col-8 mx-auto">
                            <a href="#" class=" col-12 btn btn-outline-dark mb-2">Catalogue</a>
                            <a href="#" class=" col-12 btn btn-primary mb-2" style="color:white">Réserver</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card team-item" style="">
                    <div class="card-body">
                        <h5 class="card-text">A partir de :</h5>
                        <h1 class="card-title"> 5 OOOfrs</h1>
                        <h6 class="card-subtitle mb-2 text-muted">Location journalier</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                        <div class="col-8 mx-auto">
                            <a href="#" class=" col-12 btn btn-outline-dark mb-2">Catalogue</a>
                            <a href="#" class=" col-12 btn btn-primary mb-2" style="color:white">Réserver</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card team-item" style="">
                    <div class="card-body">
                        <h5 class="card-text">A partir de :</h5>
                        <h1 class="card-title"> 5 OOOfrs</h1>
                        <h6 class="card-subtitle mb-2 text-muted">Location hebdomadaire</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                        <div class="col-8 mx-auto">
                            <a href="#" class=" col-12 btn btn-outline-dark mb-2">Catalogue</a>
                            <a href="#" class=" col-12 btn btn-primary mb-2" style="color:white">Réserver</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card team-item" style="">
                    <div class="card-body">
                        <h5 class="card-text">A partir de :</h5>
                        <h1 class="card-title"> 5 OOOfrs</h1>
                        <h6 class="card-subtitle mb-2 text-muted">Location mensuel</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                        <div class="col-8 mx-auto">
                            <a href="#" class=" col-12 btn btn-outline-dark mb-2">Catalogue</a>
                            <a href="#" class=" col-12 btn btn-primary mb-2" style="color:white">Réserver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Price End -->

<!-- Team Start -->
{{-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
            <h1 class="display-6 mb-5">Meet Our Professional Team Members</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="img/team-1.jpg" alt="" />
                    <div class="text-center p-4">
                        <h5>Full Name</h5>
                        <span>Designation</span>
                    </div>
                    <div class="team-text text-center bg-white p-4">
                        <h5>Full Name</h5>
                        <p>Designation</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="img/team-2.jpg" alt="" />
                    <div class="text-center p-4">
                        <h5>Full Name</h5>
                        <span>Designation</span>
                    </div>
                    <div class="team-text text-center bg-white p-4">
                        <h5>Full Name</h5>
                        <p>Designation</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="img/team-3.jpg" alt="" />
                    <div class="text-center p-4">
                        <h5>Full Name</h5>
                        <span>Designation</span>
                    </div>
                    <div class="team-text text-center bg-white p-4">
                        <h5>Full Name</h5>
                        <p>Designation</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item rounded">
                    <img class="img-fluid" src="img/team-4.jpg" alt="" />
                    <div class="text-center p-4">
                        <h5>Full Name</h5>
                        <span>Designation</span>
                    </div>
                    <div class="team-text text-center bg-white p-4">
                        <h5>Full Name</h5>
                        <p>Designation</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-light m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
            <h1 class="display-6 mb-5">Ce que les gens disent de nous !</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-3 d-none d-lg-block">
                {{-- <div class="testimonial-left h-100">
                    <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="" />
                    <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="" />
                    <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="" />
                </div> --}}
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded mx-auto mb-4" src="{{ asset('img/testimonial-1.jpg') }}" alt="" />
                        <p class="fs-5">
                            Dolores sed duo clita tempor justo dolor et stet lorem kasd
                            labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                            et labore et tempor diam tempor erat.
                        </p>
                        <h5>Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded mx-auto mb-4" src="{{ asset('img/testimonial-2.jpg') }}" alt="" />
                        <p class="fs-5">
                            Dolores sed duo clita tempor justo dolor et stet lorem kasd
                            labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                            et labore et tempor diam tempor erat.
                        </p>
                        <h5>Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded mx-auto mb-4" src="{{ asset('img/testimonial-3.jpg') }}" alt="" />
                        <p class="fs-5">
                            Dolores sed duo clita tempor justo dolor et stet lorem kasd
                            labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                            et labore et tempor diam tempor erat.
                        </p>
                        <h5>Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-none d-lg-block">
                {{-- <div class="testimonial-right h-100">
                    <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="" />
                    <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="" />
                    <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="" />
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection