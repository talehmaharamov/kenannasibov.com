@extends('master.frontend')
@section('content')
    <div class="container pb-1">
        <div class="row pt-4">
            <div class="col">
                <div class="overflow-hidden mb-3">
                    <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation"
                        data-appear-animation="maskUp">
                        <span>@lang('frontend.directors')</span>

                    </h2>
                </div>
            </div>
        </div>
    </div>
    <section class="section section-default border-0 appear-animation" data-appear-animation="fadeIn"
             data-appear-animation-delay="750">
        <div class="container">
            <div class="row appear-animation" data-appear-animation="fadeInLeftShorter"
                 data-appear-animation-delay="1000">
                <div class="col">
                    <div class="owl-carousel owl-theme stage-margin nav-style-1 owl-loaded owl-drag owl-carousel-init"
                         data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}"
                         style="height: auto;">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(-577px, 0px, 0px); transition: all 0s ease 0s; width: 2967px; padding-left: 40px; padding-right: 40px;">
                                @foreach($directors as $director)
                                    <div class="owl-item appear-animation" data-appear-animation="fadeInLeftShorter"
                                         data-appear-animation-delay="1000"
                                         style="width: 278.667px; margin-right: 10px;">
                                        <div>
                                        <span class="thumb-info thumb-info-hide-wrapper-bg">
        									<span class="thumb-info-wrapper">
        										<img style="height:300px; !important; width: 1200px; !important;"
                                                     src="{{asset($director->photo)}}"
                                                     class="img-fluid" alt="" width="700px" height="700px">
                                                <span class="thumb-info-title">
                                                    <span
                                                        class="thumb-info-inner">{{ $director->translate(app()->getLocale())->name }}</span>
                                                    <span
                                                        class="thumb-info-type">{{ $director->translate(app()->getLocale())->position }}</span>
        										</span>
        									</span>

        								</span>
                                            <span
                                                class="thumb-info-caption-text">{{ $director->translate(app()->getLocale())->description }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev"></button>
                            <button type="button" role="presentation" class="owl-next"></button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
