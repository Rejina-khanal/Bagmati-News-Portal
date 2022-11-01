<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sport.css') }}">


@extends('layouts.app')

@section('section')

    <body>
        <!--Business Section-->
        <div class="business_body_section">
            <!--Khelkud news section start-->
            <section class="business_body">
                <div class="heading">
                    <h1 class="line">खेलकुद</h1>
                    <div class="line blue_line one"></div>
                </div>

                <div class="business_main_news">
                    <div class="card">
                        <div class="row">
                            <div class="col-6">
                                <a href="">
                                    <img src="{{ asset('assets/images/businesss.jpg') }}" alt="Avatar">
                                </a>
                            </div>
                            <div class="col-6">
                                <div class="business_main_news_detail">
                                    <h3>
                                        रियल मड्रिडको शतप्रतिशत जित, बार्सिलोना दोस्रो स्थानमा उक्लियो?
                                    </h3>
                                    <p>३ भाद्र २०७९, शुक्रबार</p>
                                    <h2>१९ भदौ, काठमाडौं । स्पानिस ला लिगामा साविक विजेता रियल मड्रिडले शनिबर राति रियल
                                        बेटिसलाई २-१ ले पराजित गरेको छ । रियल
                                        मड्रिड यस सिजन खेलेका सबै ४ खेल जित्दै शतप्रतिशत नतिजा ल्याउने एक्लो टिम बनेको छ । ४
                                        खेलबाट १२ अंकसहित रियल शीर्ष
                                        स्थानमा छ । यसअघि चार खेलमा अपराजित रहेको बेटिसको भने यो पहिलो हार हो ।</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!--Khelkud news section end-->

            <!-- news and trending news section start-->
            <section class="bank_body">
                <div class="row">
                    <div class="col-8 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                        <div class="bank_section">
                            <div class="bank_main_new">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="">
                                                <!--Main bank news image-->
                                                <img src="{{ asset('assets/images/swastha.jpg') }}" alt="Avatar">
                                            </a>
                                        </div>
                                        <!--Main bank news detail-->
                                        <div class="col-6">
                                            <div class="container">
                                                <h3>कुलमान पढेको विद्यालयमा वर्षमानको एक घण्टा</h3>
                                                <p>३ भाद्र २०७९, शुक्रबार</p>
                                                <h2>रामेछाप । अबिरल बर्षासँगै आएको बाढीले गोकुलगंगा गाउँपालिका–२ ठोसेमा
                                                    पहिरोले
                                                    पाँच वटा
                                                    घर
                                                    बगाएको छ । अबिरल बर्षासँगै आएको
                                                    बाढीले ठोस...</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--bank other news-->
                            <div class="row bank_news">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 gx-2 col-sm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                                            <a href="">
                                                <!--bank news image-->
                                                <img src="{{ asset('assets/images/samachar.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <!--bank news detail-->
                                        <div
                                            class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 gx-1 bank_news_detail">
                                            <h3>
                                                कति छ आज सुन चाँदीको मूल्य ?
                                            </h3>
                                            <p>३ भाद्र २०७९, शुक्रबार</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 gx-2 col-sm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                                            <a href="">
                                                <!--bank news image-->
                                                <img src="{{ asset('assets/images/samachar.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <!--bank news detail-->
                                        <div
                                            class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 gx-1 bank_news_detail">
                                            <h3>
                                                कति छ आज सुन चाँदीको मूल्य ?
                                            </h3>
                                            <p>३ भाद्र २०७९, शुक्रबार</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--trending section news start-->
                    <div class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class=" market_section">
                            <div class="heading">
                                <h1 class="line">ट्रेन्डिङ</h1>
                                <div class="line blue_line one"></div>
                            </div>
                            <a href="">
                                <!--trending news image-->
                                <img src="{{ asset('assets/images/businesss.jpg') }}" alt="">

                            </a>

                            <!--trending news detail-->
                            <div class="market_news">
                                <!--trending news title-->
                                <h3>
                                    कति छ आज सुन चाँदीको मूल्य ?
                                </h3>
                                <!--trending news date-->
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>

                            <!--trending news detail-->
                            <div class="market_news">
                                <!--trending news title-->
                                <h3>
                                    कति छ आज सुन चाँदीको मूल्य ?
                                </h3>
                                <!--trending news date-->
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>

                        </div>
                    </div>
                    <!--trending section news end-->
                </div>
            </section>
            <!--news and trending news section end-->

            <!--feature news section start-->
            <section class="paryatan_body">
                <div class="heading">
                    <h1 class="line">फिचर</h1>
                    <div class="line blue_line one"></div>
                </div>
                <div class="row">
                    <div class="col-4 gx-3">
                        <div class="paryatan_body_image">
                            <a href="">
                                <img src="{{ asset('assets/images/swastha.jpg') }}" alt="">
                            </a>
                            <div class="paryatan_body_image_text">
                                <h4>पुरुष सौन्दर्य : फेसनमा थरीथरीका दाह्री</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 gx-3">
                        <div class="paryatan_body_image">
                            <a href="">
                                <img src="{{ asset('assets/images/swastha.jpg') }}" alt="">
                            </a>
                            <div class="paryatan_body_image_text">
                                <h4>पुरुष सौन्दर्य : फेसनमा थरीथरीका दाह्री</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 gx-3">
                        <div class="paryatan_body_image">
                            <a href="">
                                <img src="{{ asset('assets/images/swastha.jpg') }}" alt="">
                            </a>
                            <div class="paryatan_body_image_text">
                                <h4>पुरुष सौन्दर्य : फेसनमा थरीथरीका दाह्री</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!--feature news section end-->

            <!--kriket news section start-->
            <section class="bank_body">
                <div class="row">
                    <div class="col-8 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                        <div class="bank_section">
                            <div class="heading">
                                <h1 class="line">क्रिकेट</h1>
                                <div class="line blue_line one"></div>
                            </div>

                            <!--main kriket news section-->
                            <div class="bank_main_new">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="">
                                                <!--Main kriket news image-->
                                                <img src="{{ asset('assets/images/swastha.jpg') }}" alt="Avatar">
                                            </a>
                                        </div>
                                        <!--Main kriket news detail-->
                                        <div class="col-6">
                                            <div class="container">
                                                <h3>कुलमान पढेको विद्यालयमा वर्षमानको एक घण्टा</h3>
                                                <p>३ भाद्र २०७९, शुक्रबार</p>
                                                <h2>रामेछाप । अबिरल बर्षासँगै आएको बाढीले गोकुलगंगा गाउँपालिका–२ ठोसेमा
                                                    पहिरोले
                                                    पाँच वटा
                                                    घर
                                                    बगाएको छ । अबिरल बर्षासँगै आएको
                                                    बाढीले ठोस...</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--kriket other news-->
                            <div class="row bank_news">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 gx-2 col-sm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                                            <a href="">
                                                <!--kriket news image-->
                                                <img src="{{ asset('assets/images/samachar.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <!--kriket news detail-->
                                        <div
                                            class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 gx-1 bank_news_detail">
                                            <h3>
                                                कति छ आज सुन चाँदीको मूल्य ?
                                            </h3>
                                            <p>३ भाद्र २०७९, शुक्रबार</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-12 gx-2 col-sm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                                            <a href="">
                                                <!--kriket news image-->
                                                <img src="{{ asset('assets/images/samachar.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <!--kriket news detail-->
                                        <div
                                            class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 gx-1 bank_news_detail">
                                            <h3>
                                                कति छ आज सुन चाँदीको मूल्य ?
                                            </h3>
                                            <p>३ भाद्र २०७९, शुक्रबार</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--Market section news start-->
                    <div class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class=" market_section">
                            <div class="heading">
                                <h1 class="line">मार्केट</h1>
                                <div class="line blue_line one"></div>
                            </div>
                            <a href="">
                                <!--Market news image-->
                                <img src="{{ asset('assets/images/businesss.jpg') }}" alt="">

                            </a>

                            <!--Market news detail-->
                            <div class="market_news">
                                <!--Market news title-->
                                <h3>
                                    कति छ आज सुन चाँदीको मूल्य ?
                                </h3>
                                <!--Market news date-->
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>

                            <!--Market news detail-->
                            <div class="market_news">
                                <!--Market news title-->
                                <h3>
                                    कति छ आज सुन चाँदीको मूल्य ?
                                </h3>
                                <!--Market news date-->
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>

                        </div>
                    </div>
                    <!--Market section news end-->
                </div>
            </section>
            <!--kriket news section end-->

            <!--khelkud bibid news section start-->
            <section class="rojgar_body">
                <div class="heading">
                    <h1 class="line">खेलकुद बिविध</h1>
                    <div class="line blue_line one"></div>
                </div>
                <div class="row">
                    <div class="col-4 rojgar_news gx-4">
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" alt="">

                        </a>
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                    <div class="col-4 rojgar_news gx-4">
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" alt="">

                        </a>
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                    <div class="col-4 rojgar_news gx-4">
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" alt="">

                        </a>
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                    <div class="col-4 rojgar_news gx-4">
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" alt="">

                        </a>
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                    <div class="col-4 rojgar_news gx-4">
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" alt="">

                        </a>
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                    <div class="col-4 rojgar_news gx-4">
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" alt="">

                        </a>
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                </div>
            </section>
            <!--Rojgar news section end-->
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
