<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/authorDetail.css') }}">


@extends('layouts.app')

@section('section')

    <body>
        <section class="aboutus">
            <div class="aboutus_body">
                <div class="heading">
                    <h1 class="line">Author</h1>
                    <div class="line blue_line one"></div>

                </div>
                <div class="host">
                    <div class="row">
                        <div class="col-12 col-sm-5 col-lg-3 col-xl-">
                            <!-- Bootstrap 5 card box -->
                            <div class="host-card-box">
                                <div class="host-card-image">
                                    <img src="{{ asset('assets/images/rabi.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-7">
                            <p>
                                Bagmati Television, the TV channel in Nepal, brings Nepal to its audiences. Its programmes
                                provide
                                in-depth analyses
                            </p>
                            <div class="row">
                                <div class="col-5 col-sm-6 col-md-5 col-lg-3">
                                    Name
                                </div>
                                <div class=" col">
                                    : Bagmati
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-5 col-sm-6 col-md-5 col-lg-3">
                                    Category
                                </div>
                                <div class="col">
                                    : Entertainment
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-5 col-sm-6 col-md-5 col-lg-3">
                                    Program Name
                                </div>
                                <div class=" col">
                                    : Rafter
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </body>
@endsection


@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/js/home.js') }}"></script>
@endsection
