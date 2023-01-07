<footer class="footer_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="footer_top flex-column">
                    <div class="footer_logo">
                        <a href="#">
                            <img src="{{asset('frontend/img/logo-white.png')}}" width="70x" height="70px" alt="">
                        </a>
                        <div class="d-lg-block d-none">
                            <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                                <div class="collapse navbar-collapse offset">
                                    <ul class="nav navbar-nav menu_nav mx-auto">
                                        <li class="nav-item"><a class="nav-link text-white"
                                                                href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                                        <li class="nav-item"><a class="nav-link text-white"
                                                                href="{{ route('frontend.about') }}">@lang('backend.about')</a></li>
                                        <li class="nav-item"><a class="nav-link text-white"
                                                                href="portfolio.html">Portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link text-white"
                                                                href="blog.html">BLog</a></li>
                                        <li class="nav-item"><a class="nav-link text-white"
                                                                href="{{ route('frontend.contact-us-page') }}">@lang('backend.contact-us')</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="footer_social mt-lg-0 mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-skype"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row footer_bottom justify-content-center">
            <p class="col-lg-8 col-sm-12 footer-text">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                @lang('backend.copyright') &copy;
                <script>document.write(new Date().getFullYear());</script> | <a href="https://instagram.com/techfoz"
                                                                               target="_blank">TM</a>
            </p>
        </div>
    </div>
</footer>
