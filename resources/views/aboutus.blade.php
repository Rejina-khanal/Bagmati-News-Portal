<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/aboutus.css') }}">


@extends('layouts.app')

@section('section')

    <body>
        <section class="aboutus">
            <div class="aboutus_body">
                <div class="heading">
                    <h1 class="line">About Us</h1>
                    <div class="line blue_line one"></div>

                </div>

                <div class="aboutus-detail">
                    <p>
                        Bagmati Television, the TV channel in Nepal, brings Nepal to its audiences. Its programmes provide
                        in-depth analyses
                        about the issues of the day and reflect the people’s voice. Its shows explore the multidimensional
                        impacts of important
                        events, by framing them in formats that range from news bulletins, interviews and features to
                        satires,
                        comedies and
                        social drama. Bagmati Television captures the many colours our lives are imbued with.
                    </p>
                </div>
                <div class="aboutus_image">
                    <img src="{{ asset('assets/images/bagmati_aboutus.jpg') }}" class="img-fluid" alt="">
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
