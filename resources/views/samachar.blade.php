<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/samachar.css') }}">


@extends('layouts.app')

@section('section')

    <body>
        <!--Samachar body-->
        <div class="samachar_body_section">
            <section class="samachar">
                <div class="heading">
                    <h1 class="line">समाचार</h1>
                    <div class="line blue_line one"></div>
                </div>
                <!--Main samachar section-->
                <div class="row main_samachar">
                    <!--Main samachar image-->
                    <div class="col-7">
                        <img src="{{ asset('assets/images/mukhyasamachr.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <!--Main samachar detail-->
                    <div class="col-5 main_samachar_detail">
                        <h3>७७ वर्षपछिको हिरोसिमा र नागासाकी</h3>
                        <h5>३ भाद्र २०७९, शुक्रबार</h5>
                        <p>रामेछाप । अबिरल बर्षासँगै आएको बाढीले गोकुलगंगा गाउँपालिका–२ ठोसेमा पहिरोले पाँच वटा घर बगाएको
                            छ
                            ।
                            अबिरल बर्षासँगै आएको
                            बाढीले ठोस...</p>
                    </div>
                </div>
                <!--other samachar section-->
                <div class="row">
                    <!--Samachar news-->
                    <div class="col-4 samachar_news">
                        <!--Samachar image-->
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                        </a>
                        <!--Samachar title-->
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                    <!--Samachar news-->
                    <div class="col-4 samachar_news">
                        <!--Samachar image-->
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                        </a>
                        <!--Samachar title-->
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                    <!--Samachar news-->
                    <div class="col-4 samachar_news">
                        <!--Samachar image-->
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                        </a>
                        <!--Samachar title-->
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                    <!--Samachar news-->
                    <div class="col-4 samachar_news">
                        <!--Samachar image-->
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                        </a>
                        <!--Samachar title-->
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                    <!--Samachar news-->
                    <div class="col-4 samachar_news">
                        <!--Samachar image-->
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                        </a>
                        <!--Samachar title-->
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                    <!--Samachar news-->
                    <div class="col-4 samachar_news">
                        <!--Samachar image-->
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                        </a>
                        <!--Samachar title-->
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                    <!--Samachar news-->
                    <div class="col-4 samachar_news">
                        <!--Samachar image-->
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                        </a>
                        <!--Samachar title-->
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                    <!--Samachar news-->
                    <div class="col-4 samachar_news">
                        <!--Samachar image-->
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                        </a>
                        <!--Samachar title-->
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                    <!--Samachar news-->
                    <div class="col-4 samachar_news">
                        <!--Samachar image-->
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                        </a>
                        <!--Samachar title-->
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                </div>
            </section>
        </div>

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
