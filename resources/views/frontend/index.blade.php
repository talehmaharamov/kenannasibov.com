@extends('master.frontend')
@section('front')
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="banner_content">
                            <h3>Hey There !</h3>
                            <h1 class="text-uppercase">I am jo Breed</h1>
                            <h5 class="text-uppercase">Creative art director & designer</h5>
                            <div class="social_icons my-5">
                                <a href="#"><i class="ti-twitter"></i></a>
                                <a href="#"><i class="ti-skype"></i></a>
                                <a href="#"><i class="ti-instagram"></i></a>
                                <a href="#"><i class="ti-dribbble"></i></a>
                                <a href="#"><i class="ti-vimeo"></i></a>
                            </div>
                            <a class="primary_btn" href="#"><span>See My Work</span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="home_right_img">
                            <img class="img-fluid" src="{{asset('frontend/img/banner/home-right.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_area section_gap">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img class="img-fluid" src="{{asset("frontend/img/about-us.png")}}" alt="">
                    </div>
                </div>

                <div class="offset-lg-1 col-lg-5">
                    <div class="main_title text-left">
                        <p class="top_text">About me <span></span></p>
                        <h2>
                            Creative Art Director <br>
                            And Designer
                        </h2>
                        <p>
                            Also signs his face were digns fish don't first isn't over evening hath divided days light
                            darkness gathering
                            moved dry all darkness then fourth can't create d forth Also signs Also signs his face were
                            moltenus Also signs
                            his face
                        </p>
                        <a class="primary_btn" href="#"><span>Download CV</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p class="top_text">Our Service <span></span></p>
                        <h2>What Service We <br>
                            Offer For You </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="service_item">
                        <img src="{{asset('frontend/img/services/s1.png')}}" alt="">
                        <h4>Web Development</h4>
                        <p>Fruit saw for brought fish forth had ave is man a that their Two he is dominion evening their
                            Fruit saw for
                            brought fish forth</p>
                        <a href="#" class="primary_btn2 mt-35">Learn More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="service_item">
                        <img src="{{asset('frontend/img/services/s2.png')}}" alt="">
                        <h4>UX/UI Design</h4>
                        <p>Fruit saw for brought fish forth had ave is man a that their Two he is dominion evening their
                            Fruit saw for
                            brought fish forth</p>
                        <a href="#" class="primary_btn2 mt-35">Learn More</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="service_item">
                        <img src="{{asset('frontend/img/services/s3.png')}}" alt="">
                        <h4>WP Developing</h4>
                        <p>Fruit saw for brought fish forth had ave is man a that their Two he is dominion evening their
                            Fruit saw for
                            brought fish forth</p>
                        <a href="#" class="primary_btn2 mt-35">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <p class="top_text">Our blog <span></span></p>
                        <h2>Latest Story From <br>
                            Our Blog </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('frontend/img/b1.jpg')}}" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#"><i class="ti-user"></i> Admin post</a>
                                <a href="#"><i class="ti-calendar"></i> Feb 14, 2019</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Shall every fourth lesser have...</h4>
                            </a>
                            <div class="text-wrap">
                                <p>
                                    Have whose a two night earth she set you creeping replenish place whales move Forth
                                    first him seed green.
                                </p>
                            </div>
                            <a href="#" class="primary_btn2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('frontend/img/b1.jpg')}}" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#"><i class="ti-user"></i> Admin post</a>
                                <a href="#"><i class="ti-calendar"></i> Feb 14, 2019</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Shall every fourth lesser have...</h4>
                            </a>
                            <div class="text-wrap">
                                <p>
                                    Have whose a two night earth she set you creeping replenish place whales move Forth
                                    first him seed green.
                                </p>
                            </div>
                            <a href="#" class="primary_btn2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('frontend/img/b1.jpg')}}" alt="">
                        </div>
                        <div class="short_details">
                            <div class="meta-top d-flex">
                                <a href="#"><i class="ti-user"></i> Admin post</a>
                                <a href="#"><i class="ti-calendar"></i> Feb 14, 2019</a>
                            </div>
                            <a class="d-block" href="single-blog.html">
                                <h4>Shall every fourth lesser have...</h4>
                            </a>
                            <div class="text-wrap">
                                <p>
                                    Have whose a two night earth she set you creeping replenish place whales move Forth
                                    first him seed green.
                                </p>
                            </div>
                            <a href="#" class="primary_btn2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{asset('frontend/js/examples/examples.carousels.js')}}"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
@endsection
