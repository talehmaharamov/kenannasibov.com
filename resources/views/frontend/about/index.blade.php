@extends('master.frontend')
@section('content')
    {{--    <section class="section-padding pb-5 mb-5">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row mt-5">--}}
    {{--                <div class="col-lg-6 col-md-6">--}}
    {{--                    <img src="{{asset($about->photo)}}" width="850px" height="565px" alt="" class="img-fluid rounded">--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-6 col-md-6">--}}
    {{--                    <h2 class="mb-4">{{ $about->translate(app()->getLocale())->title }}</h2>--}}
    {{--                    <p>{{ $about->translate(app()->getLocale())->description }}</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <div class="container pb-1">
        <div class="row pt-4">
            <div class="col">
                <div class="overflow-hidden mb-3">
                    <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation"
                        data-appear-animation="maskUp">
                         <span class="word-rotator-words bg-primary">
{{--										<b class="is-visible">Dırnıs</b>--}}
                         </span>
                        <span>Dırnıs Xeyriyyə Cəmiyyəti</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <section class="section section-default border-0 appear-animation" data-appear-animation="fadeIn"
             data-appear-animation-delay="750">
        <div class="container py-4">

            <div class="row align-items-center">
                <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter"
                     data-appear-animation-delay="1000">
                    <div class="owl-carousel owl-theme nav-inside mb-0"
                         data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': false}">
                        <div>
                            <img alt="" class="img-fluid" src="{{asset($about->photo)}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="overflow-hidden mb-2">
                        <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation"
                            data-appear-animation="maskUp" data-appear-animation-delay="1200">
                            {{ $about->translate(app()->getLocale())->title }}
                        </h2>
                    </div>
                    <p class="appear-animation" data-appear-animation="fadeInUpShorter"
                       data-appear-animation-delay="1400">{{ $about->translate(app()->getLocale())->description }}</p>

                </div>
            </div>

        </div>
    </section>
@endsection
