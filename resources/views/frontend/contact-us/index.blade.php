@extends('master.frontend')
@section('title',__('backend.contact-us').' | ' )
@section('front')
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <h2>@lang('backend.contact-us')</h2>
                    <div class="page_link">
                        <a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a>
                        <a>@lang('backend.contact-us')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-margin">
        <div class="container">
            <div class="row">
{{--                <div class="col-12">--}}
{{--                    <h2 class="contact-title">@lang('backend.contact-us')</h2>--}}
{{--                </div>--}}
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <form class="form-contact contact_form" action="{{ route('frontend.sendMessage') }}" method="post" id="contactForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                              placeholder="@lang('backend.message')"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text"
                                           placeholder="@lang('backend.name')">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email"
                                           placeholder="@lang('backend.email')">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                           placeholder="@lang('backend.subject')">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-lg-3">
                            <button type="submit" class="primary_btn button-contactForm">@lang('backend.send-message')</button>
                        </div>
                    </form>


                </div>

                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>{{ settings('location') }}</h3>
                            <p>{{ settings('location_dec') }}</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3><a href="tel:{{settings('phone')}}">{{ settings('phone') }}</a></h3>
                            <p>{{ settings('phone_dec') }}</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a href="mailto:{{settings('email')}}">{{ settings('email') }}</a></h3>
                            <p>{{ settings('email_dec') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
