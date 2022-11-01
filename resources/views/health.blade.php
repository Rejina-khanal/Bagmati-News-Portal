<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/health.css') }}">


@extends('layouts.app')

@section('section')

    <body>
        <div class="health_body_section">
            <!--Main health section start-->
            <section class="main_health_section">
                <h2>सवालमा छ पहिचान, सुझाइरहे समाधान
                </h2>
                <div class="health_body">
                    <img src="{{ asset('assets/images/health.png') }}" class="img-fluid" alt="">
                </div>

                <!--health main news start-->
                <div class="row">
                    <div class="col-4 health_news gx-4">
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">
                        </a>
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                    <div class="col-4 health_news gx-4">
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">

                        </a>
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>

                    <div class="col-4 health_news gx-4">
                        <a href="#">
                            <img src="{{ asset('assets/images/samacharImage.png') }}" class="img-fluid" alt="">

                        </a>
                        <h3>रामेछापमा बाढीले पाँच घर बगायो</h3>
                    </div>
                </div>
                <!--health main news end-->
            </section>
            <!--Main health section end-->

            <!--Covid news section start-->
            <section class="covid_body">
                <div class="heading">
                    <h1 class="line">कोभिड-१९ विशेष</h1>
                    <div class="line blue_line one"></div>
                </div>
                <!--covid news body start-->
                <div class="row">
                    <!--covid news card-->
                    <div class="col-4 gx-4">
                        <div class="covid_body_image">
                            <a href="">
                                <!---covid news image-->
                                <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid" alt="">
                            </a>
                            <!--covid news detail-->
                            <div class="covid_body_image_text">
                                <h4>पुरुष सौन्दर्य : फेसनमा थरीथरीका दाह्री</h4>
                            </div>
                        </div>
                    </div>

                    <!--covid news card-->
                    <div class="col-4 gx-4">
                        <div class="covid_body_image">
                            <a href="">
                                <!---covid news image-->
                                <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid" alt="">
                            </a>
                            <!--covid news detail-->
                            <div class="covid_body_image_text">
                                <h4>पुरुष सौन्दर्य : फेसनमा थरीथरीका दाह्री</h4>
                            </div>
                        </div>
                    </div>

                    <!--covid news card-->
                    <div class="col-4 gx-4">
                        <div class="covid_body_image">
                            <a href="">
                                <!---covid news image-->
                                <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid" alt="">
                            </a>
                            <!--covid news detail-->
                            <div class="covid_body_image_text">
                                <h4>पुरुष सौन्दर्य : फेसनमा थरीथरीका दाह्री</h4>
                            </div>
                        </div>
                    </div>

                </div>
                <!--covid news body end-->
            </section>
            <!--covid news section end-->

            <!--Section containing tips, antarbarta start-->
            <section class="tips_body">
                <div class="row tips_main">
                    <!--Tips section start-->
                    <div class="col-8 gx-1">
                        <div class=" tips_main_news">
                            <div class="heading">
                                <h1 class="line">टिप्स/जानकारी</h1>
                                <div class="line blue_line one"></div>
                            </div>

                            <!--tips card-->
                            <div class="row tips_card">
                                <div class="col-5">
                                    <a href="">
                                        <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                                <!--tips news detail-->
                                <div class="col-7 tips_detail">
                                    <h3>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h3>
                                    <p>३ भाद्र २०७९, शुक्रबार
                                    </p>
                                </div>
                            </div>

                            <!--tips card-->
                            <div class="row tips_card">
                                <div class="col-5">
                                    <a href="">
                                        <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                                <!--tips news detail-->
                                <div class="col-7 tips_detail">
                                    <h3>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h3>
                                    <p>३ भाद्र २०७९, शुक्रबार
                                    </p>
                                </div>
                            </div>

                            <!--tips card-->
                            <div class="row tips_card">
                                <div class="col-5">
                                    <a href="">
                                        <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                                <!--tips news detail-->
                                <div class="col-7 tips_detail">
                                    <h3>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h3>
                                    <p>३ भाद्र २०७९, शुक्रबार
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Tips section end-->

                    <!--Antarbarta section start-->
                    <div class="col-4 antarbarta_body">
                        <div class="heading">
                            <h1 class="line">अन्तर्वार्ता</h1>
                            <div class="line blue_line one"></div>
                        </div>

                        <div class="row antarbarta_card">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <a href="">
                                    <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 antarbarta_detail">
                                <h3>पर्खाइमा बित्यो दुई दशक, सकिएन दुःखका पहाड</h3>
                            </div>
                        </div>

                        <div class="row antarbarta_card">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <a href="">
                                    <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 antarbarta_detail">
                                <h3>पर्खाइमा बित्यो दुई दशक, सकिएन दुःखका पहाड</h3>
                            </div>
                        </div>

                        <div class="row antarbarta_card">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                <a href="">
                                    <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 antarbarta_detail">
                                <h3>पर्खाइमा बित्यो दुई दशक, सकिएन दुःखका पहाड</h3>
                            </div>
                        </div>
                    </div>
                    <!--Antarbarta section end-->
                </div>
            </section>
            <!--Section containing tips, antarbarta end-->

            <!--Section containing biswa_Swastha, and Prabash start-->
            <section class="tips_body">
                <div class="row tips_main">
                    <!--Biswa Swastha section start-->
                    <div class="col-8 gx-1">
                        <div class=" tips_main_news">
                            <div class="heading">
                                <h1 class="line">विश्व स्वास्थ्य</h1>
                                <div class="line blue_line one"></div>
                            </div>

                            <div class="row tips_card">
                                <div class="col-5">
                                    <a href="">
                                        <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                                <div class="col-7 tips_detail">
                                    <h3>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h3>
                                    <p>३ भाद्र २०७९, शुक्रबार
                                    </p>
                                </div>
                            </div>

                            <div class="row tips_card">
                                <div class="col-5">
                                    <a href="">
                                        <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                                <div class="col-7 tips_detail">
                                    <h3>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h3>
                                    <p>३ भाद्र २०७९, शुक्रबार
                                    </p>
                                </div>
                            </div>

                            <div class="row tips_card">
                                <div class="col-5">
                                    <a href="">
                                        <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                                <div class="col-7 tips_detail">
                                    <h3>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h3>
                                    <p>३ भाद्र २०७९, शुक्रबार
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Biswa Swastha section end-->

                    <!--Antarbarta section start-->
                    <div class="col-4 antarbarta_body">
                        <div class="heading">
                            <h1 class="line">प्रवास</h1>
                            <div class="line blue_line one"></div>
                        </div>

                        <div class="row prabash_card">
                            <div class="prabash_detail">
                                <h3>पर्खाइमा बित्यो दुई दशक, सकिएन दुःखका पहाड</h3>
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>
                        </div>

                        <div class="row prabash_card">
                            <div class="prabash_detail">
                                <h3>पर्खाइमा बित्यो दुई दशक, सकिएन दुःखका पहाड</h3>
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>
                        </div>

                        <div class="row prabash_card">
                            <div class="prabash_detail">
                                <h3>पर्खाइमा बित्यो दुई दशक, सकिएन दुःखका पहाड</h3>
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>
                        </div>

                    </div>
                    <!--Antarbarta section end-->
                </div>
            </section>

            <!--Section containing biswa_Swastha, and Prabash end-->

            <!--Section containing profile and banshaima ausashi start-->
            <section class="tips_body">
                <div class="row tips_main">
                    <!--Profile section start-->
                    <div class="col-8 gx-1">
                        <div class=" tips_main_news">
                            <div class="heading">
                                <h1 class="line">प्रोफाइल</h1>
                                <div class="line blue_line one"></div>
                            </div>

                            <div class="row tips_card">
                                <div class="col-5">
                                    <a href="">
                                        <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                                <div class="col-7 tips_detail">
                                    <h3>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h3>
                                    <p>३ भाद्र २०७९, शुक्रबार
                                    </p>
                                </div>
                            </div>

                            <div class="row tips_card">
                                <div class="col-5">
                                    <a href="">
                                        <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                                <div class="col-7 tips_detail">
                                    <h3>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h3>
                                    <p>३ भाद्र २०७९, शुक्रबार
                                    </p>
                                </div>
                            </div>

                            <div class="row tips_card">
                                <div class="col-5">
                                    <a href="">
                                        <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                </div>
                                <div class="col-7 tips_detail">
                                    <h3>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h3>
                                    <p>३ भाद्र २०७९, शुक्रबार
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Profile section end-->

                    <!--banshaima ausashi section start-->
                    <div class="col-4 antarbarta_body">
                        <div class="heading">
                            <h1 class="line">भान्सामै</h1>
                            <div class="line blue_line one"></div>
                        </div>
                        <div class="bhanshama_ausadhi">
                            <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid" alt="">
                        </div>

                        <div class="row prabash_card">
                            <div class="prabash_detail">
                                <h3>पर्खाइमा बित्यो दुई दशक, सकिएन दुःखका पहाड</h3>
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>
                        </div>

                        <div class="row prabash_card">
                            <div class="prabash_detail">
                                <h3>पर्खाइमा बित्यो दुई दशक, सकिएन दुःखका पहाड</h3>
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>
                        </div>

                        <div class="row prabash_card">
                            <div class="prabash_detail">
                                <h3>पर्खाइमा बित्यो दुई दशक, सकिएन दुःखका पहाड</h3>
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>
                        </div>

                    </div>
                    <!--Antarbarta section end-->

                </div>
            </section>
            <!--Section containing profile and banshaima ausashi end-->

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
