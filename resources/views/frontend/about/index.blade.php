@extends('master.frontend')
@section('title',__('backend.about').' | ' )
@section('front')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>@lang('backend.about')</h2>
                    <div class="page_link">
                        <a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a>
                        <a>@lang('backend.about')</a>
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
                        <img class="" src="{{asset('frontend/img/about-us.png')}}" alt="">
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5">
                    <div class="main_title text-left">
                        <p class="top_text">@lang('backend.about') <span></span></p>
                        <h2>
                            Creative Art Director <br>
                            And Designer
                        </h2>
                        <p>
                            Also signs his face were digns fish don't first isn't over evening hath divided days light darkness gathering
                            moved dry all darkness then fourth can't create d forth Also signs Also signs his face were moltenus Also signs
                            his face
                        </p>
                        <a class="primary_btn" href="#"><span>Download CV</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
