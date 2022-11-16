<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/gallery.css') }}">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>


@extends('layouts.app')

@section('section')

    <body>
        <div class="business_body_section">
            <section class="paryatan_body">
                <div class="heading">
                    <h1 class="line">मनोरञ्जन</h1>
                    <div class="line blue_line one"></div>
                </div>
                <div class="vid-slider">
                    <div class="vid-wrapper row">
                        <div class="vid item col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <iframe src="https://www.youtube.com/embed/339-GOK4bAw" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <h2 class="vid-head">ठगै ठगको झुण्डमा नौलो ठगाीको धन्दा</h2>
                        </div>

                        <div class="vid item col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <iframe src="https://www.youtube.com/embed/339-GOK4bAw" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <h2 class="vid-head">ठगै ठगको झुण्डमा नौलो ठगाीको धन्दा</h2>
                        </div>

                        <div class="vid item col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <iframe src="https://www.youtube.com/embed/339-GOK4bAw" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <h2 class="vid-head">ठगै ठगको झुण्डमा नौलो ठगाीको धन्दा</h2>
                        </div>

                        <div class="vid item col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            <iframe src="https://www.youtube.com/embed/339-GOK4bAw" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <h2 class="vid-head">ठगै ठगको झुण्डमा नौलो ठगाीको धन्दा</h2>
                        </div>

                    </div>
                </div>
                <div class="video-popup">
                    <div class="iframe-wrapper"><iframe width="400" height="300" src="" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <span class="close-video"></span>
                    </div>
                </div>
            </section>

            <section class="paryatan_body">
                <div class="heading">
                    <h1 class="line">मनोरञ्जन</h1>
                    <div class="line blue_line one"></div>
                </div>
                <div class="vid-slider">
                    <div class="vid-wrapper row">
                        <div class="vid item col-4">
                            <iframe src="https://www.youtube.com/embed/339-GOK4bAw" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <h2 class="vid-head">ठगै ठगको झुण्डमा नौलो ठगाीको धन्दा</h2>
                        </div>

                        <div class="vid item col-4">
                            <iframe src="https://www.youtube.com/embed/339-GOK4bAw" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <h2 class="vid-head">ठगै ठगको झुण्डमा नौलो ठगाीको धन्दा</h2>
                        </div>

                        <div class="vid item col-4">
                            <iframe src="https://www.youtube.com/embed/339-GOK4bAw" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <h2 class="vid-head">ठगै ठगको झुण्डमा नौलो ठगाीको धन्दा</h2>
                        </div>

                        <div class="vid item col-4">
                            <iframe src="https://www.youtube.com/embed/339-GOK4bAw" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <h2 class="vid-head">ठगै ठगको झुण्डमा नौलो ठगाीको धन्दा</h2>
                        </div>

                    </div>
                </div>

            </section>
        </div>
    </body>
@endsection


@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/js/home.js') }}"></script>
    <!--<script>
        $(function() {
            $('.popup-youtube, .watchnow, .news-video, .news-video-list').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
    </script>-->

    <script>
        $(document).ready(function() {
            $('.vid-slider .vid').on('click', function() {
                // get required DOM Elements
                var iframe_src = $(this).children('iframe').attr('src'),
                    iframe = $('.video-popup'),
                    iframe_video = $('.video-popup iframe'),
                    close_btn = $('.close-video');
                iframe_src = iframe_src + '?autoplay=1&rel=0'; // for autoplaying the popup video

                // change the video source with the clicked one
                $(iframe_video).attr('src', iframe_src);
                $(iframe).fadeIn().addClass('show-video');

                // remove the video overlay when clicking outside the video
                $(document).on('click', function(e) {
                    if ($(iframe).is(e.target) || $(close_btn).is(e.target)) {
                        $(iframe).removeClass('show-video');
                        $(iframe_video).attr('src', '');
                    }
                });

            });

        });
    </script>
@endsection
