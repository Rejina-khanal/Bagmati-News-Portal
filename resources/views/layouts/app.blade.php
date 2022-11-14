<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Owl carousel Css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">

    <!--Main css is used for navigation and footer-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu.css') }}">


    <!--Font Awesome for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css"
        integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Title -->
    <title>Bagmati</title>
</head>

<header>
    <div class="row top-header container-xxxl">
        <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-4 order-2 order-sm-1 header-top date ">
            <p>२६ श्रावण २०७९, बिहिबार/ Thu Aug 11, 2022</p>
        </div>
        <div class="col-6 col-sm-3 col-md-4 col-lg-4 col-xl-4 order-1 order-sm-2 logo">
            <a href="{{ route('home') }}"> <img src="{{ asset('assets/images/bagmati-header.png') }}" class="img-fluid"
                    alt=""></a>
        </div>
        <hr class="linee d-sm-none d-md-none d-lg-none d-xl-none order-3 ">

        <div class="col-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 header-top english gx-5 order-3">
            <a href="#">English</a>
        </div>
        <div class="col-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 header-top nepali gx-5 order-4">
            <a href="#">नेपाली</a>
        </div>

        <div class="col-7 col-sm-3 col-md-3 col-lg-3 col-xl-2 header-top social-media order-5">
            <h2>
                <a href="https://www.instagram.com/bagmatitvhd/"><i class="fa-brands fa-instagram fa-xs"></i></a>
                <a href="https://www.facebook.com/bagmatitv"><i class="fa-brands fa-facebook fa-xs"></i></a>
                <a href="https://twitter.com/BagmatiTVHD"><i class="fa-brands fa-twitter fa-xs"></i></a>
                <a href="https://www.youtube.com/c/BagmatiTVHD"><i class="fa-brands fa-youtube fa-xs"></i> </a>
                <a href="https://www.youtube.com/c/BagmatiTVHD"><i class="fa-brands fa-tiktok fa-xs"></i></a>
            </h2>

        </div>
        <hr class="linee d-sm-none d-md-none d-lg-none d-xl-none order-5">

    </div>
    <div class="hamburger-menu">
        <div class="container">
            <div class="row">
                <div class=" col-sm-12">
                    <div class="menu-tigger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <nav>
                        <ul>
                            <li><a href="{{ route('home') }}">होमपेज</a></li>
                            <li><a href="{{ route('samachar') }}">समाचार</a></li>
                            <li><a href="{{ route('business') }}">बिजनेस</a></li>
                            <li><a href="{{ route('pradesh') }}">प्रदेश</a></li>
                            <li><a href="{{ route('health') }}">स्वास्थ्य</a></li>
                            <li><a href="{{ route('entertainment') }}">मनोरञ्जन</a></li>
                            <li><a href="{{ route('sport') }}">खेलकुद</a></li>
                            <li><a href="{{ route('sahitya') }}">कला/साहित्य</a></li>
                            <!--<li><a href="bibidh.html">विविध</a></li>-->
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    अन्य
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">

                                    <li><a class="dropdown-item" href="{{ route('bibidh') }}">विविध</a></li><br>
                                    <li><a class="dropdown-item" href="#">samachar</a></li><br>
                                    <li><a class="dropdown-item" href="#">entertainment</a></li><br>
                                    <li><a class="dropdown-item" href="#">samachar</a></li><br>
                                    <li><a class="dropdown-item" href="#">entertainment</a></li><br>
                                    <li><a class="dropdown-item" href="#">samachar</a></li><br>
                                </ul>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>

</header>



@yield('section')

<!-- Footer -->
<footer class="text-white">
    <div class="container">
        <div class="row">
            <!--About company section on footer-->
            <div class="col-lg-6 col-md-6 section">
                <div class="bagmati-footer-logo">
                    <a href="home.html">
                        <!--Our program image-->
                        <img src="{{ asset('assets/images/footerLogo-removebg-preview.png') }}" class="img-fluid"
                            alt="">
                    </a>
                </div>
                <h4 class="fw-bold"></h4>
                <h3 class="about-company">
                    Bagmati Television, the TV channel in Nepal, brings Nepal to its audiences. Its programmes provide
                    in-depth analyses
                    about the issues of the day and reflect the people’s voice. Its shows explore the multidimensional
                    impacts of important
                    events, by framing them in formats that range from news bulletins, interviews and features to
                    satires, comedies and
                    social drama. Bagmati Television captures the many colours our lives are imbued with.<br>
                    <h2>
                        <a href="#">Read More</a>
                    </h2>
                </h3>
            </div>
            <hr class="w-100 clearfix d-md-none" />

            <!--Terms and condition section in footer-->
            <div class="col-lg-3 col-md-3 section">

                <h6 class="fw-bold">Advertise</h6>
                <p>
                    <a href="#">In Bagmati Television</a>
                </p>

                <h6 class="fw-bold">Feedback</h6>
                <p>
                    <a href="#">Send us your enquiry and feedback</a>
                </p>
                <h6 class="fw-bold">Terms and Policy</h6>
                <p><a href="#">Terms and Conditions</a><br>
                    <a href="#">Privacy</a><br>
                    <a href="#">Policy</a><br>
                    <a href="#">FAQ</a>
                </p>
            </div>

            <hr class="w-100 clearfix d-md-none" />

            <!--Contact section in footer-->
            <div class="col-lg-3 col-md-3 section">
                <h6 class="fw-bold">Contact</h6>
                <p>Bagmati Television Pvt. Ltd.<br>
                    Naya Baneshwor,<br>
                    Kathmandu, Nepal<br><br>

                    <a href="tel: 01-4483075"><i class="fas fa-phone "></i> +977 9876543210<br> +977 01 123456</a>
                </p>

                <h6 class="fw-bold">Social</h6>
                <h5>
                    <a href="https://www.facebook.com/bagmatitv" target="_blank">
                        <i class="fa-brands fa-facebook fa-xs"></i></a>
                    <a href="https://www.instagram.com/bagmatitvhd/" target="_blank"><i
                            class="fa-brands fa-instagram fa-xs"></i></a>
                    <a href="https://www.youtube.com/c/BagmatiTVHD" target="_blank"><i
                            class="fa-brands fa-youtube fa-xs"></i> </a>
                    <a href="https://twitter.com/BagmatiTVHD" target="_blank"><i
                            class="fa-brands fa-twitter fa-xs"></i></a>

                </h5>
            </div>
        </div>
        </section>
    </div>
</footer>

<!-- Footer -->
<!--<div class="text-center" style="background-color: yellow;">-->
<div class="copyright">
    <p>Copyright &copy;2022 bagmatitv. All rights reserved.</p>
</div>


@yield('script')

</body>

</html>
@section('script')
    <script src="{{ asset('assets/js/home.js') }}"></script>
@endsection
