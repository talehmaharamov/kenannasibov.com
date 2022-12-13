@extends('master.frontend')
@section('content')
    <div role="main" class="main">
        <div id="googlemaps" class="google-map mt-0" style="height: 500px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3032.7816089134226!2d49.931798215523756!3d40.52431795701283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40308d7f54af9489%3A0xaf9c41bd677c22d9!2zIkTEsXJuxLFzICIgbcmZcmFzaSBldmk!5e0!3m2!1sen!2s!4v1670368872994!5m2!1sen!2s"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-12">
                    <h2 class="font-weight-bold text-8 mt-2 mb-4">@lang('backend.contact-us')</h2>
                    <form class="contact-form" method="POST" action="{{ route('frontend.sendMessage') }}">
                        @csrf
                        @if(session()->has('successMessage'))
                            <div class="alert alert-success">
                                {{ session()->get('successMessage') }}
                            </div>
                        @endif
                        @if(session()->has('errorMessage'))
                            <div class="alert alert-danger">
                                {{ session()->get('errorMessage') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">@lang('backend.name')</label>
                                <input type="text" maxlength="100"
                                       placeholder="Taleh Maharramov"
                                       class="form-control text-3 h-auto py-2" name="name" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="form-label mb-1 text-2">@lang('backend.phone')</label>
                                <input type="text" placeholder="+994 50 987 65 54 "
                                       maxlength="100" class="form-control text-3 h-auto py-2" name="phone" required>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">@lang('backend.email')</label>
                                <input type="email" maxlength="100"
                                       placeholder="taleh@dirnis.com"
                                       class="form-control text-3 h-auto py-2" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label mb-1 text-2">Message</label>
                                <textarea maxlength="5000" rows="8" placeholder="@lang('backend.message')"
                                          class="form-control text-3 h-auto py-2" name="message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <button type="submit" class="btn btn-primary btn-modern"
                                        data-loading-text="Loading...">
                                    <i class="fa fa-paper-plane"></i>
                                    @lang('backend.send-message')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
