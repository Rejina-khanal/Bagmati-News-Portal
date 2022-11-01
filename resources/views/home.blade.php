<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home.css') }}">

@extends('layouts.app')

@section('section')

    <body>
        <div class="body_section">

            <!--slider section start-->
            <section class="slider">
                <!--Slider news heading-->
                <h2>प्रचण्ड र बाबुरामबीच भेटवार्ता, के भयो छलफल ?</h2>

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <!--Slider Images-->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="">
                                <img src="{{ asset('assets/images/slider.jpg') }}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="">
                                <img src="{{ asset('assets/images/slider.jpg') }}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="">
                                <img src="{{ asset('assets/images/slider.jpg') }}" class="d-block w-100" alt="...">
                            </a>
                        </div>
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
            </section>
            <!--slider section end-->

            <!--Mukhya samachar Section Start-->
            <section class="mukhya_samachar">

                <div class="row mukhya_samachar_body">
                    <!--Mukhya samachar heading-->
                    <div class="heading">
                        <h1 class="line">मुख्य समाचार</h1>
                        <div class="line blue_line one"></div>
                    </div>
                    <div class="col-6 main_mukhya_samachar_image ">
                        <!--Mukhya samachar image-->
                        <a href="">
                            <img src="{{ asset('assets/images/mukhyasamachr.jpg') }}" class="img-fluid" alt="">
                        </a>
                        <!--Mukhya samachar title-->
                        <h3>७७ वर्षपछिको हिरोसिमा र नागासाकी</h3>
                        <!--Mukhya samachar date-->
                        <h5>३ भाद्र २०७९, शुक्रबार</h5>
                        <!--Mukhya samachar detail-->
                        <p>रामेछाप । अबिरल बर्षासँगै आएको बाढीले गोकुलगंगा गाउँपालिका–२ ठोसेमा पहिरोले पाँच वटा घर बगाएको छ
                            ।
                            अबिरल बर्षासँगै आएको
                            बाढीले ठोस...</p>
                    </div>

                    <div class="col-6">
                        <div class="row">
                            <div class="col-5 mukhya_samachar_image">
                                <!--Mukhya samachar image-->
                                <a href="">
                                    <img src="{{ asset('assets/images/mukhyasamachar1.jpg') }}" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="col-7">
                                <!--Mukhya samachar title-->
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-5 mukhya_samachar_image">
                                <!--Mukhya samachar image-->
                                <a href="">
                                    <img src="{{ asset('assets/images/mukhyasamachar2.jpg') }}" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="col-7">
                                <!--Mukhya samachar title-->
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 mukhya_samachar_image">
                                <!--Mukhya samachar image-->
                                <a href="">
                                    <img src="{{ asset('assets/images/mukhyasamachar3.jpg') }}" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="col-7">
                                <!--Mukhya samachar title-->
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 mukhya_samachar_image">
                                <!--Mukhya samachar image-->
                                <a href="">
                                    <img src="{{ asset('assets/images/mukhyasamachar4.jpg') }}" class="img-fluid"
                                        alt="">
                                </a>
                            </div>
                            <div class="col-7">
                                <!--Mukhya samachar title-->
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>

                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!--Mukhya samachar section End-->

            <!--Advertisement section Start-->
            <section class="advertisement">
                <!--advertisement image-->
                <img src="{{ asset('assets/images/nic_advertisement.jpg.png') }}" class="img-fluid" alt="">
            </section>
            <!--Advertisement section end-->

            <!--samachar,business,trending pradesh, artha and advertisement containing section-->
            <section class="samachar">
                <div class="row">
                    <div class="col-8">
                        <!--Samachar section start-->
                        <div class="row samachar_section">
                            <!--Samachar title-->
                            <div class="heading">
                                <h1 class="line">समाचार</h1>
                                <div class="line blue_line one"></div>
                            </div>
                            <div class="row">
                                <!--Samachar part start-->
                                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <!--Samachar Image-->
                                    <a href="">
                                        <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                    <!--Samachar title-->
                                    <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                                </div>
                                <!--Samachar part end-->

                                <!--Samachar part start-->
                                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <!--Samachar Image-->
                                    <a href="">
                                        <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                    <!--Samachar title-->
                                    <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                                </div>
                                <!--Samachar part end-->

                                <!--Samachar part start-->
                                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <!--Samachar Image-->
                                    <a href="">
                                        <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                    <!--Samachar title-->
                                    <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                                </div>
                                <!--Samachar part end-->

                                <!--Samachar part start-->
                                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                    <!--Samachar Image-->
                                    <a href="">
                                        <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid"
                                            alt="">
                                    </a>
                                    <!--Samachar title-->
                                    <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                                </div>
                                <!--Samachar part end-->
                            </div>
                        </div>
                        <!--Samachar section end-->

                        <!--business section start-->
                        <div class="row business_section">
                            <!--Business news title-->
                            <div class="heading">
                                <h1 class="line">बिजनेस</h1>
                                <div class="line blue_line one"></div>
                            </div>

                            <!--Main Business news start-->
                            <div class="col-12">
                                <div class="row business_section_main">
                                    <div class="col-6">
                                        <!--Main Business News Image-->
                                        <img src="{{ asset('assets/images/businesss.jpg') }}" class="img-fluid"
                                            alt="">
                                    </div>

                                    <!--Main Business News Detail-->
                                    <div class="col-6">
                                        <a href="#">कर्पोरेट</a>
                                        <h4>कति छ आज सुन चाँदीको मूल्य ?</h4>
                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                    </div>
                                </div>
                            </div>
                            <!--Main Business news end-->
                            <!--Business other news section start-->
                            <div class="col-4 business_section_news">
                                <!--Business news image-->
                                <img src="{{ asset('assets/images/business.jpg') }}" class="img-fluid" alt="">
                                <!--Business news details-->
                                <a href="#">रोजगार</a>
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>
                            <div class="col-4 business_section_news">
                                <!--Business news image-->
                                <img src="{{ asset('assets/images/business.jpg') }}" class="img-fluid" alt="">
                                <!--Business news details-->
                                <a href="#">रोजगार</a>
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>
                            <div class="col-4 business_section_news">
                                <!--Business news image-->
                                <img src="{{ asset('assets/images/business.jpg') }}" class="img-fluid" alt="">
                                <!--Business news details-->
                                <a href="#">रोजगार</a>
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>
                            <!--Business other news section End-->
                        </div>
                        <!--business section end-->


                        <!--Pradesh Section start-->
                        <div class="row pradesh_section">
                            <div class="row">
                                <div class="col-4">
                                    <!--Pradesh news heading-->
                                    <div class="heading">
                                        <h1 class="line">प्रदेश</h1>
                                        <div class="line blue_line one"></div>
                                    </div>
                                </div>
                                <!--different pradesh links-->
                                <div class="col-8 pradesh-news-nav element">
                                    <ul>
                                        <li><a class="Single" target="1">प्रदेश-1</a></li>
                                        <li><a class="Single" target="2">प्रदेश-2</a></li>
                                        <li><a class="Single" target="3">प्रदेश-3</a></li>
                                        <li><a class="Single" target="4">प्रदेश-4</a></li>
                                        <li><a class="Single" target="5">प्रदेश-5</a></li>
                                        <li><a class="Single" target="6">प्रदेश-6</a></li>
                                        <li><a class="Single" target="7">प्रदेश-7</a></li>
                                    </ul>
                                </div>
                            </div>

                            <section class="target_box">
                                <!--Pradesh1 section start-->
                                <div id="div1" class="target">
                                    <section class="predesh1">
                                        <p>प्रदेश-1</p>
                                        <div class="row">
                                            <!--Pradesh 1 main news-->
                                            <div class="col-12">
                                                <div class="row pradesh_section_main">
                                                    <div class="col-6">
                                                        <!--Pradesh 1 main news image-->
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/pradesh1.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <!--Pradesh 1 main news detail-->
                                                    <div class="col-6">
                                                        <h3>कुलमान पढेको विद्यालयमा वर्षमानको एक घण्टा</h3>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                        <h2>
                                                            रामेछाप । अबिरल बर्षासँगै आएको बाढीले गोकुलगंगा गाउँपालिका–२
                                                            ठोसेमा पहिरोले पाँच वटा घर बगाएको छ । अबिरल बर्षासँगै आएको
                                                            बाढीले ठोस...
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Pradesh1 other news section start-->
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <!--Pradesh 1 other news image-->
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>

                                                    <!--Pradesh 1 other news detail-->
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <!--Pradesh 1 other news image-->
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>

                                                    <!--Pradesh 1 other news detail-->
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <!--Pradesh 1 other news image-->
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>

                                                    <!--Pradesh 1 other news detail-->
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <!--Pradesh 1 other news image-->
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>

                                                    <!--Pradesh 1 other news detail-->
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Pradesh 1 other news section end-->
                                        </div>
                                    </section>
                                </div>
                                <!--Pradesh1 section end-->

                                <!--Pradesh2 section start-->
                                <div id="div2" class="target">
                                    <section class="predesh2">
                                        <p>प्रदेश-2</p>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row pradesh_section_main">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/pradesh2.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h3>कुलमान पढेको विद्यालयमा वर्षमानको एक घण्टा</h3>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                        <h2>
                                                            रामेछाप । अबिरल बर्षासँगै आएको बाढीले गोकुलगंगा गाउँपालिका–२
                                                            ठोसेमा पहिरोले पाँच वटा घर बगाएको छ । अबिरल बर्षासँगै आएको
                                                            बाढीले ठोस...
                                                        </h2>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!--Pradesh2 section end-->

                                <!--Pradesh3 section start-->
                                <div id="div3" class="target">
                                    <section class="predesh3">
                                        <p>प्रदेश-3</p>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row pradesh_section_main">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/pradesh3.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h3>कुलमान पढेको विद्यालयमा वर्षमानको एक घण्टा</h3>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                        <h2>
                                                            रामेछाप । अबिरल बर्षासँगै आएको बाढीले गोकुलगंगा गाउँपालिका–२
                                                            ठोसेमा पहिरोले पाँच वटा घर बगाएको छ । अबिरल बर्षासँगै आएको
                                                            बाढीले ठोस...
                                                        </h2>
                                                    </div>

                                                </div>
                                            </div>

                                            <div
                                                class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_newscol-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!--Pradesh3 section end-->

                                <!--Pradesh4 section start-->
                                <div id="div4" class="target">
                                    <section class="predesh4">
                                        <p>प्रदेश-4</p>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row pradesh_section_main">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/pradesh4.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h3>कुलमान पढेको विद्यालयमा वर्षमानको एक घण्टा</h3>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                        <h2>
                                                            रामेछाप । अबिरल बर्षासँगै आएको बाढीले गोकुलगंगा गाउँपालिका–२
                                                            ठोसेमा पहिरोले पाँच वटा घर बगाएको छ । अबिरल बर्षासँगै आएको
                                                            बाढीले ठोस...
                                                        </h2>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!--Pradesh4 section end-->

                                <!--Pradesh5 section start-->
                                <div id="div5" class="target">
                                    <section class="predesh5">
                                        <p>प्रदेश-5</p>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row pradesh_section_main">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/pradesh5.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h3>कुलमान पढेको विद्यालयमा वर्षमानको एक घण्टा</h3>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                        <h2>
                                                            रामेछाप । अबिरल बर्षासँगै आएको बाढीले गोकुलगंगा गाउँपालिका–२
                                                            ठोसेमा पहिरोले पाँच वटा घर बगाएको छ । अबिरल बर्षासँगै आएको
                                                            बाढीले ठोस...
                                                        </h2>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!--Pradesh5 section end-->

                                <!--Pradesh6 section start-->
                                <div id="div6" class="target">
                                    <section class="predesh6">
                                        <p>प्रदेश-6</p>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row pradesh_section_main">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/pradesh6.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h3>कुलमान पढेको विद्यालयमा वर्षमानको एक घण्टा</h3>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                        <h2>
                                                            रामेछाप । अबिरल बर्षासँगै आएको बाढीले गोकुलगंगा गाउँपालिका–२
                                                            ठोसेमा पहिरोले पाँच वटा घर बगाएको छ । अबिरल बर्षासँगै आएको
                                                            बाढीले ठोस...
                                                        </h2>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!--Pradesh6 section end-->

                                <!--Pradesh7 section start-->
                                <div id="div7" class="target">
                                    <section class="predesh7">
                                        <p>प्रदेश-7</p>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row pradesh_section_main">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/pradesh7.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h3>कुलमान पढेको विद्यालयमा वर्षमानको एक घण्टा</h3>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                        <h2>
                                                            रामेछाप । अबिरल बर्षासँगै आएको बाढीले गोकुलगंगा गाउँपालिका–२
                                                            ठोसेमा पहिरोले पाँच वटा घर बगाएको छ । अबिरल बर्षासँगै आएको
                                                            बाढीले ठोस...
                                                        </h2>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 pradesh_news">
                                                <div class="row ">
                                                    <div class="col-6">
                                                        <a href="">
                                                            <img src="{{ asset('assets/images/samachar.jpg') }}"
                                                                class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="col-6">
                                                        <h4>अश्लील नृत्य गर्ने ९ जनालाई नियन्त्रणमा लिएर छोडियो</h4>
                                                        <p>३ भाद्र २०७९, शुक्रबार</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!--Pradesh7 section end-->
                            </section>

                        </div>
                        <!--Pradesh Section end-->

                        <!--Artha Section start-->
                        <div class="row artha_section">
                            <!--artha news title-->
                            <div class="heading">
                                <h1 class="line">अर्थ</h1>
                                <div class="line blue_line one"></div>
                            </div>

                            <!--Artha news -->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <!--Artha news image-->
                                <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid" alt="">
                                <!--Artha news title-->
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                            </div>

                            <!--Artha news -->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <!--Artha news image-->
                                <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid" alt="">
                                <!--Artha news title-->
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                            </div>

                            <!--Artha news -->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <!--Artha news image-->
                                <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid" alt="">
                                <!--Artha news title-->
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                            </div>

                            <!--Artha news -->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <!--Artha news image-->
                                <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid" alt="">
                                <!--Artha news title-->
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                            </div>
                        </div>
                        <!--Artha Section end-->

                    </div>

                    <div class="col-4">
                        <!--Trending news section start-->
                        <div class="row trending_section">
                            <!--Trending news heading-->
                            <div class="heading">
                                <h1 class="line">ट्रेन्डिङ</h1>
                                <div class="line blue_line one"></div>
                            </div>
                            <!--Main Trending news-->
                            <div class="col-12">
                                <div class="trending_image">
                                    <!--Main Trending Image-->
                                    <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid"
                                        alt="">
                                    <!--Main Trending detail-->
                                    <div class="trending_image_text">
                                        <h4>रामेछापमा बाढीले पाँच घर बगायोघर बगायोघर बगायोघर बगायो</h4>
                                    </div>
                                </div>
                            </div>

                            <!--Trending news detail-->
                            <div class="trending_news">
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>

                            <!--Trending news detail-->
                            <div class="trending_news">
                                <h4>कति छ आज सुन चाँदीको मूल्य ?</h4>
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>

                            <!--Trending news detail-->
                            <div class="trending_news">
                                <h4>नयाँ युगमा प्रवेश गर्दैछ पोखरा</h4>
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>

                            <!--Trending news detail-->
                            <div class="trending_news">
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>

                            <!--Trending news detail-->
                            <div class="trending_news">
                                <h4>कति छ आज सुन चाँदीको मूल्य ?</h4>
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>

                            <!--Trending news detail-->
                            <div class="trending_news">
                                <h4>नयाँ युगमा प्रवेश गर्दैछ पोखरा</h4>
                                <p>३ भाद्र २०७९, शुक्रबार</p>
                            </div>
                        </div>
                        <!--Trending news section end-->

                        <!--Advertisement section start-->
                        <div class="advertisement_section">
                            <img src="{{ asset('assets/images/offer4.jpg') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/images/offer1.jpg') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/images/offer2.jpg') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/images/offer3.jpg') }}" class="img-fluid" alt="">
                        </div>
                        <!--Advertisement section end-->
                    </div>
                </div>
            </section>

            <!--Advertisement start-->
            <section class="advertisement">
                <img src="{{ asset('assets/images/shivam.png') }}" class="img-fluid" alt="">
            </section>
            <!--Advertisement end-->

            <!--Section containing swastha, manoranjan section-->
            <section class="swastha">
                <div class="row">
                    <div class="col-8">
                        <!--Swastha section start-->
                        <div class="row swastha_section">
                            <!--Swastha news heading-->
                            <div class="heading">
                                <h1 class="line">स्वास्थ्य</h1>
                                <div class="line blue_line one"></div>
                            </div>

                            <!--Swastha news-->
                            <div class="col-6">
                                <!--Swastha news image-->
                                <div class="swastha_image">
                                    <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                        alt="">
                                    <!--Swastha news title-->
                                    <div class="swastha_image_text">
                                        <h4>कोलेस्टेरोल आफैंमा रोग होइन</h4>
                                    </div>
                                </div>
                            </div>

                            <!--Swastha news-->
                            <div class="col-6">
                                <!--Swastha news image-->
                                <div class="swastha_image">
                                    <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                        alt="">
                                    <!--Swastha news title-->
                                    <div class="swastha_image_text">
                                        <h4>कोलेस्टेरोल आफैंमा रोग होइन</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Swastha section end-->

                        <!--Manoranjan Section Start-->
                        <div class="row manoranjan_section">
                            <div class="heading">
                                <!--Manoranjan news heading-->
                                <h1 class="line">मनोरञ्जन</h1>
                                <div class="line blue_line one"></div>
                            </div>

                            <!--Manoranjan news-->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="manoranjan_image">
                                    <!--Manoranjan news image-->
                                    <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                        alt="">
                                    <!--Manoranjan news detail-->
                                    <div class="manoranjan_image_text">
                                        <h4>फिल्म प्रदर्शनमा विभेद गरिएको भन्दै जुम्ला प्रशासनमा ज्ञापन</h4>
                                    </div>
                                </div>
                            </div>

                            <!--Manoranjan news-->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="manoranjan_image">
                                    <!--Manoranjan news image-->
                                    <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                        alt="">
                                    <!--Manoranjan news detail-->
                                    <div class="manoranjan_image_text">
                                        <h4>फिल्म प्रदर्शनमा विभेद गरिएको भन्दै जुम्ला प्रशासनमा ज्ञापन</h4>
                                    </div>
                                </div>
                            </div>

                            <!--Manoranjan news-->
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="row">
                                    <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="manoranjan_images">
                                            <!--Manoranjan news image-->
                                            <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                                alt="">
                                            <!--Manoranjan news detail-->
                                            <div class="manoranjan_image_text">
                                                <h4>फिल्म प्रदर्शनमा विभेद गरिएको भन्दै जुम्ला प्रशासनमा ज्ञापन</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <!--Manoranjan news image-->
                                        <div class="manoranjan_images">
                                            <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                                alt="">
                                            <!--Manoranjan news detail-->
                                            <div class="manoranjan_image_text">
                                                <h4>फिल्म प्रदर्शनमा विभेद गरिएको भन्दै जुम्ला प्रशासनमा ज्ञापन</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Manoranjan Section end-->
                    </div>

                    <!--Advertisement start-->
                    <div class="col-4">
                        <div class="advertisement_section">
                            <img src="{{ asset('assets/images/offer5.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/images/offer6.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/images/offer7.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <!--Advertisement end-->

                </div>
            </section>

            <!--Advertisement-->
            <section class="advertisement">
                <img src="{{ asset('assets/images/worldlink.png') }}" class="img-fluid" alt="">
            </section>

            <!--khelkud, sahitya, bibid, khabar containing section-->
            <section class="swastha">
                <div class="row">
                    <div class="col-8">
                        <!--Khelkud Section Start-->
                        <div class="row manoranjan_section">
                            <!--Khelkud section heading-->
                            <div class="heading">
                                <h1 class="line">खेलकुद</h1>
                                <div class="line blue_line one"></div>
                            </div>

                            <!--khelkud news-->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <!--khelkud news image-->
                                <div class="manoranjan_image">
                                    <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                        alt="">
                                    <!--khelkud news detail-->
                                    <div class="manoranjan_image_text">
                                        <h4>फिल्म प्रदर्शनमा विभेद गरिएको भन्दै जुम्ला प्रशासनमा ज्ञापन</h4>
                                    </div>
                                </div>
                            </div>

                            <!--Khlekud news-->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <!--khelkud news image-->
                                <div class="manoranjan_image">
                                    <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                        alt="">
                                    <!--khelkud news detail-->
                                    <div class="manoranjan_image_text">
                                        <h4>फिल्म प्रदर्शनमा विभेद गरिएको भन्दै जुम्ला प्रशासनमा ज्ञापन</h4>
                                    </div>
                                </div>
                            </div>

                            <!--Khlekud news-->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <!--khelkud news image-->
                                <div class="manoranjan_image">
                                    <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                        alt="">
                                    <!--khelkud news detail-->
                                    <div class="manoranjan_image_text">
                                        <h4>फिल्म प्रदर्शनमा विभेद गरिएको भन्दै जुम्ला प्रशासनमा ज्ञापन</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Khelkud Section End-->

                        <!--Sahitya section start-->
                        <div class="row samachar_section">
                            <!--Sahitya news heading-->
                            <div class="heading">
                                <h1 class="line">साहित्य</h1>
                                <div class="line blue_line one"></div>
                            </div>
                            <!--sahitya news-->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid" alt="">
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                            </div>
                            <!--sahitya news-->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid" alt="">
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                            </div>
                            <!--sahitya news-->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid" alt="">
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                            </div>
                            <!--sahitya news-->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid" alt="">
                                <h4>७७ वर्षपछिको हिरोसिमा र नागासाकी</h4>
                            </div>
                        </div>
                        <!--Sahitya section end-->

                        <!--Bibid Section Start -->
                        <div class="row manoranjan_section">
                            <!--Bibid samachar heading -->
                            <div class="heading">
                                <h1 class="line">विविध</h1>
                                <div class="line blue_line one"></div>
                            </div>
                            <!--Bibid samachar-->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="manoranjan_image">
                                    <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                        alt="">
                                    <div class="manoranjan_image_text">
                                        <h4>फिल्म प्रदर्शनमा विभेद गरिएको भन्दै जुम्ला प्रशासनमा ज्ञापन</h4>
                                    </div>
                                </div>
                            </div>

                            <!--Bibid samachar-->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="manoranjan_image">
                                    <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                        alt="">
                                    <div class="manoranjan_image_text">
                                        <h4>फिल्म प्रदर्शनमा विभेद गरिएको भन्दै जुम्ला प्रशासनमा ज्ञापन</h4>
                                    </div>
                                </div>
                            </div>

                            <!--Bibid samachar-->
                            <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <div class="manoranjan_image">
                                    <img src="{{ asset('assets/images/swastha.jpg') }}" class="img-fluid"
                                        alt="">
                                    <div class="manoranjan_image_text">
                                        <h4>फिल्म प्रदर्शनमा विभेद गरिएको भन्दै जुम्ला प्रशासनमा ज्ञापन</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Bibid Section End-->
                    </div>

                    <!--Khabar and advertisement start-->
                    <div class="col-4">
                        <!--Khabar Section Start-->
                        <div class="khabar_section">
                            <!--Khabar news heading-->
                            <div class="heading">
                                <h1 class="line">खबर</h1>
                                <div class="line blue_line one"></div>
                            </div>

                            <!--Khabar news-->
                            <div class="row khabar_news">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                                    <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7">
                                    <p>पर्खाइमा बित्यो दुई दशक, सकिएन दुःखका पहाड</p>
                                </div>
                            </div>

                            <!--Khabar news-->
                            <div class="row khabar_news">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                                    <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7">
                                    <p>पर्खाइमा बित्यो दुई दशक, सकिएन दुःखका पहाड</p>
                                </div>
                            </div>

                            <!--Khabar news-->
                            <div class="row khabar_news">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                                    <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7">
                                    <p>पर्खाइमा बित्यो दुई दशक, सकिएन दुःखका पहाड</p>
                                </div>
                            </div>

                            <!--Khabar news-->
                            <div class="row khabar_news">
                                <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                                    <img src="{{ asset('assets/images/samachar.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7">
                                    <p>पर्खाइमा बित्यो दुई दशक, सकिएन दुःखका पहाड</p>
                                </div>
                            </div>

                        </div>
                        <!--Khabar Section End-->

                        <div class="advertisement_section">
                            <img src="{{ asset('assets/images/offer8.png') }}" class="img-fluid" alt="">
                            <img src="{{ asset('assets/images/offer9.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <!--Khabar and advertisement end-->
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
