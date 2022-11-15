<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/defaultpage.css') }}">


@extends('layouts.app')

@section('section')

    <body>
        <div class="samachar_body_section">
            <section class="samachar">
                <section class="mukhya_samachar">
                    <div class="heading">
                        <div class="line blue_line one"></div>
                        <h1 class="line">समाचार</h1>
                        <div class="line blue_line one"></div>
                    </div>

                    <!--main samachar news section start-->
                    <div class="main_samachar">
                        <div class="">
                            <img src="{{ asset('assets/images/mukhyasamachr.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="main_samachar_detail">
                        <h3>७७ वर्षपछिको हिरोसिमा र नागासाकी</h3>
                        <!--<h5>३ भाद्र २०७९, शुक्रबार</h5>-->
                        <div class="heading author">
                            <h5 class="line">३ भाद्र २०७९, शुक्रबार</h5>
                            <div class="{{ asset('assets/images/bhanubhakta.png') }}" alt="Avatar">
                            </div>
                            <h5 class="line">हिरोसिमा</h5>
                        </div>


                        <p>रामेछाप । अबिरल बर्षासँगै आएको बाढीले गोकुलगंगा गाउँपालिका–२ ठोसेमा पहिरोले पाँच वटा घर बगाएको छ
                            ।
                            अबिरल बर्षासँगै आएको
                            बाढीले ठोस...</p>
                    </div>
                    <!--main samachar news section end-->
                </section>
                <section class="other_samachar">
                    <!--Other samachar news section start-->
                    <div class="row">
                        <!--Samachar news-->
                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 samachar_news">
                            <a href="#">
                                <!--Samachar news image-->
                                <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                            </a>
                            <!--Samachar news detail-->
                            <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                            <div class="heading author">
                                <h5 class="line">३ भाद्र २०७९, शुक्रबार</h5>
                                <div class="line">
                                    <img src="{{ asset('assets/images/bhanubhakta.png') }}" alt="Avatar">
                                </div>
                                <h5 class="line">हिरोसिमा</h5>
                            </div>

                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 samachar_news">
                            <a href="#">
                                <!--Samachar news image-->
                                <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                            </a>
                            <!--Samachar news detail-->
                            <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                            <div class="heading author">
                                <h5 class="line">३ भाद्र २०७९, शुक्रबार</h5>
                                <div class="line">
                                    <img src="{{ asset('assets/images/bhanubhakta.png') }}" alt="Avatar">
                                </div>
                                <h5 class="line">हिरोसिमा</h5>
                            </div>

                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 samachar_news">
                            <a href="#">
                                <!--Samachar news image-->
                                <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                            </a>
                            <!--Samachar news detail-->
                            <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                            <div class="heading author">
                                <h5 class="line">३ भाद्र २०७९, शुक्रबार</h5>
                                <div class="line">
                                    <img src="{{ asset('assets/images/bhanubhakta.png') }}" alt="Avatar">
                                </div>
                                <h5 class="line">हिरोसिमा</h5>
                            </div>

                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 samachar_news">
                            <a href="#">
                                <!--Samachar news image-->
                                <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                            </a>
                            <!--Samachar news detail-->
                            <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                            <div class="heading author">
                                <h5 class="line">३ भाद्र २०७९, शुक्रबार</h5>
                                <div class="line">
                                    <img src="{{ asset('assets/images/bhanubhakta.png') }}" alt="Avatar">
                                </div>
                                <h5 class="line">हिरोसिमा</h5>
                            </div>

                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 samachar_news">
                            <a href="#">
                                <!--Samachar news image-->
                                <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                            </a>
                            <!--Samachar news detail-->
                            <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                            <div class="heading author">
                                <h5 class="line">३ भाद्र २०७९, शुक्रबार</h5>
                                <div class="line">
                                    <img src="{{ asset('assets/images/bhanubhakta.png') }}" alt="Avatar">
                                </div>
                                <h5 class="line">हिरोसिमा</h5>
                            </div>

                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 samachar_news">
                            <a href="#">
                                <!--Samachar news image-->
                                <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                            </a>
                            <!--Samachar news detail-->
                            <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                            <div class="heading author">
                                <h5 class="line">३ भाद्र २०७९, शुक्रबार</h5>
                                <div class="line">
                                    <img src="{{ asset('assets/images/bhanubhakta.png') }}" alt="Avatar">
                                </div>
                                <h5 class="line">हिरोसिमा</h5>
                            </div>
                        </div>

                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 samachar_news">
                            <a href="#">
                                <!--Samachar news image-->
                                <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                            </a>
                            <!--Samachar news detail-->
                            <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                            <div class="heading author">
                                <h5 class="line">३ भाद्र २०७९, शुक्रबार</h5>
                                <div class="line">
                                    <img src="{{ asset('assets/images/bhanubhakta.png') }}" alt="Avatar">
                                </div>
                                <h5 class="line">हिरोसिमा</h5>
                            </div>

                        </div>

                    </div>
                    <!--Other samachar news section end-->
                </section>
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
