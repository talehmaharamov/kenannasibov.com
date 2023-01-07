<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="{{ route('frontend.index') }}"><img width="100%" height="70px" src="{{asset('frontend/img/logo.png')}}"
                                                                      alt=""></a>
                <a class="navbar-brand logo_inner_page" href="index.html"><img src="img/logo2.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav">
                        <li class="nav-item {{ (Route::currentRouteName() == 'frontend.index') ? 'active' : '' }}"><a class="nav-link" href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                        <li class="nav-item {{ (Route::currentRouteName() == 'frontend.about') ? 'active' : '' }}"><a class="nav-link" href="{{ route('frontend.about') }}">@lang('backend.about')</a></li>
                        <li class="nav-item"><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ (Route::currentRouteName() == 'frontend.contact-us-page') ? 'active' : '' }}"><a class="nav-link" href="{{ route('frontend.contact-us-page') }}">@lang('backend.contact-us')</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
