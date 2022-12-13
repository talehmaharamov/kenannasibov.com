<header id="header"
        data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 45, 'stickySetTop': '-45px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
{{--                            <a href="{{ route('frontend.index') }}">--}}
{{--                                <img alt="Porto" width="100" height="55" data-sticky-width="100" data-sticky-height="55"--}}
{{--                                     data-sticky-top="25" src="{{ asset('frontend/images/logos/logo.png') }}">--}}
{{--                            </a>--}}
                            <a href="http://dxc.test" class="logo pe-0 pe-lg-3">
                                <img alt="Dırnıs Xeyriyyə Cəmiyyəti" src="{{  asset('frontend/images/logos/logo.png') }}" width="80" height=80" data-plugin-options="{'appearEffect': 'fadeIn'}"  data-sticky-top="25">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row pt-3">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                                    <a class="nav-link" href="#" role="button" id="dropdownLanguage"
                                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img
                                            src="{{asset(\App\Models\SiteLanguage::where('code',app()->getLocale())->first()->icon)}}"
                                            class="flag flag-us"
                                            alt="{{ \App\Models\SiteLanguage::where('code',app()->getLocale())->first()->name }}"/> {{ \App\Models\SiteLanguage::where('code',app()->getLocale())->first()->name }}
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                        @foreach(active_langs() as $lang)
                                            <a class="dropdown-item"
                                               href="{{ route('frontend.frontLanguage',$lang->code) }}"><img
                                                    src="{{ asset($lang->icon) }}"
                                                    class="flag flag-us"
                                                    alt="English"/> {{ $lang->name }}</a>
                                        @endforeach
                                    </div>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-nav-features">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle text-decoration-none"
                                   data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                    <form role="search" action="page-search-results.html" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search"
                                                   value="" placeholder="Search...">
                                            <button class="btn" type="submit">
                                                <i class="fas fa-search header-nav-top-icon"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-row">
                        <div class="header-nav pt-1">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ ( Route::currentRouteName()  == 'frontend.index') ? 'active' : '' }}"
                                               href="{{ route('frontend.index') }}">
                                                @lang('backend.home-page')
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ ( Route::currentRouteName()  == 'frontend.sasasas') ? 'active' : '' }}"
                                               href="{{ route('frontend.index') }}">
                                                @lang('backend.news')
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ ( Route::currentRouteName()  == 'frontend.allPosts') ? 'active' : '' }}"
                                               href="{{ route('frontend.allPosts') }}">
                                                @lang('backend.posts')
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ ( Route::currentRouteName()  == 'frontend.ssdf') ? 'active' : '' }}" href="#">
                                                @lang('backend.categories')
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach($categories as $category)
                                                    <li>
                                                        <a class="dropdown-item"
                                                           href="#">{{ $category->translate($locale)->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ ( Route::currentRouteName()  == 'frontend.directors') ? 'active' : '' }}"
                                               href="{{ route('frontend.directors') }}">
                                                @lang('frontend.directors')
                                            </a>
                                        </li>

                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ ( Route::currentRouteName()  == 'frontend.about') ? 'active' : '' }}"
                                               href="{{ route('frontend.about') }}">
                                                @lang('backend.about')
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ ( Route::currentRouteName()  == 'frontend.contact-us-page') ? 'active' : '' }}"
                                               href="{{ route('frontend.contact-us-page') }}">
                                                @lang('backend.contact-us')
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                    data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
