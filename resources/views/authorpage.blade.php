<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/authorpage.css') }}">


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
                        <div class="col-md-6 col-lg-3">
                            <!-- Bootstrap 5 card box -->
                            <div class="host-card-box">
                                <div class="host-card-image">
                                    <a href="authorDetail.html">
                                        <img src="{{ asset('assets/images/rabi.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <p>Name: Rabi Lammichane</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!-- Bootstrap 5 card box -->
                            <div class="host-card-box">
                                <div class="host-card-image">
                                    <a href="authorDetail.html">
                                        <img src="{{ asset('assets/images/rabi.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <p>Name: Rabi Lammichane</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <!-- Bootstrap 5 card box -->
                            <div class="host-card-box">
                                <div class="host-card-image">
                                    <a href="authorDetail.html">
                                        <img src="{{ asset('assets/images/rabi.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <p>Name: Rabi Lammichane</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <!-- Bootstrap 5 card box -->
                            <div class="host-card-box">
                                <div class="host-card-image">
                                    <a href="authorDetail.html">
                                        <img src="{{ asset('assets/images/rabi.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <p>Name: Rabi Lammichane</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!-- Bootstrap 5 card box -->
                            <div class="host-card-box">
                                <div class="host-card-image">
                                    <a href="authorDetail.html">
                                        <img src="{{ asset('assets/images/rabi.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <p>Name: Rabi Lammichane</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!-- Bootstrap 5 card box -->
                            <div class="host-card-box">
                                <div class="host-card-image">
                                    <a href="authorDetail.html">
                                        <img src="{{ asset('assets/images/rabi.jpg') }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <p>Name: Rabi Lammichane</p>
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
