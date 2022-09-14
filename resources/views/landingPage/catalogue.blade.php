@extends('layout')

@section('title')
    AutoRent - Notre Catalogue
@endsection

@section('content')
    <div class="container">
        <div class="text-center pt-5 pb-2">
            <h2> Le catalogue</h2>
        </div>
        {{-- Display table for each mark --}}
        @for ($x = 0; $x < 5; $x++)
            <div class="pt-3">
                <div class="p-2 text-center">
                    <h3>Marque n° {{ $x }}</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"> # </th>
                            <th scope="col"> Images </th>
                            <th scope="col"> Modèles </th>
                            <th scope="col"> Type de véhicule </th>
                            <th scope="col"> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 10; $i++)
                            <tr>
                                <th scope="row">{{ $i + 1 }}</th>
                                <td>
                                    <img src="{{ asset('img/icon/icon-02-primary.png') }}" alt="" style="width:25%">
                                </td>
                                <td class=""> Otto</td>
                                <td class=""> Type</td>
                                <td>
                                    <a href="" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#v{{ $x }}-{{ $i }}">Voir plus</a>
                                </td>
                            </tr>
                            {{-- Modal for each model of mark--}}
                            <div class="modal fade" id="v{{ $x }}-{{ $i }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                                    <div class="modal-content  bg-gray-300">
                                        <div class="modal-header d-block text-center">
                                            <h5 class="modal-title" id="v">Marque {{ $x }} - modèle
                                                {{ $i + 1 }}</h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row g-2 py-1">
                                                <div class="col-6 d-flex ">
                                                    <div class=" d-flex align-items-center ">
                                                        {{-- <img class="mx-auto" src="{{ asset('img/icon/icon-02-primary.png') }}" style="width:50% "> --}}
                                                        <div class="mx-auto">
                                                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                                                <div class="carousel-indicators">
                                                                    @for ($numCarousel=0;$numCarousel < 5;$numCarousel++)
                                                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $numCarousel }}" class="{{ $numCarousel == 0 ? 'active' : ''}}"
                                                                        aria-current="true" aria-label="Slide {{ $numCarousel+1 }}"></button>
                                                                    @endfor
                                                                </div>
                                                                <div class="carousel-inner">
                                                                    @for ($carousel=0;$carousel < 5;$carousel++)
                                                                        <div class="carousel-item {{ $carousel ==0 ? 'active' : '' }}">
                                                                            <img src="{{ asset('img/icon/icon-02-primary.png') }} "  class="d-flex w-100" alt="...">
                                                                        </div>
                                                                    @endfor
                                                                </div>
                                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                                                    data-bs-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Previous</span>
                                                                </button>
                                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                                                    data-bs-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="visually-hidden">Next</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 " >
                                                    <div class="mx-3">
                                                        <div class="pt-1 ">
                                                            <h3>Description</h3>
                                                        </div>
                                                        <div class="py-2">
                                                            <p>
                                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                                Molestiae nesciunt sed tempore
                                                                illum. Ex, odio
                                                                necessitatibus! Perspiciatis deserunt perferendis veniam
                                                                possimus illo, repellendus et
                                                                quo, soluta atque
                                                                quaerat voluptatibus distinctio. <br>
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam
                                                                dicta voluptatum non suscipit qui animi commodi doloribus
                                                                necessitatibus, iure temporibus saepe, praesentium soluta velit
                                                                amet voluptatibus iste similique debitis natus. <br>
                                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae nesciunt sed tempore illum. Ex, odio
                                                                necessitatibus!
                                                                Perspiciatis deserunt perferendis veniam possimus illo, repellendus et quo, soluta atque quaerat voluptatibus
                                                                distinctio
                                                            </p>
                                                            <div class="py-2 border-top border-bottom">
                                                                <div class="text-center">
                                                                    <h4>Prix</h4>
                                                                </div>
                                                                <div class="row ">
                                                                    <div class="col border-right">
                                                                        <h6>Horaire :</h6> <br>
                                                                        100$
                                                                    </div>
                                                                    <div class="col border-right">
                                                                        <h6>Journalier :</h6> <br>
                                                                        100$
                                                                    </div>
                                                                    <div class="col border-right">
                                                                        <h6>Hebdo :</h6> <br>
                                                                        100$
                                                                    </div>
                                                                    <div class="col border-right">
                                                                        <h6>Mensuel :</h6> <br>
                                                                        100$
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="py-1 m-2">
                                                            <a id="shwdetail" class="" >Voir la disponibilité</a>
                                                            <div id="detail" class="py-1" style="display: none">
                                                                <ul>
                                                                    @for ($y =0; $y < 5 ; $y++ ) <li> Lieu {{ $y }}</li>
                                                                        @endfor
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </tbody>
                </table>
            </div>
        @endfor


    </div>


@endsection
