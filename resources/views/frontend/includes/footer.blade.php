<footer id="footer">
    <div class="container">
        <div class="row py-5 my-2">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <h5 class="text-4 mb-3">@lang('backend.news')</h5>
                <p class="pe-1">@lang('messages.newsletter')</p>
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
                <form  action="{{ route('backend.newsletter.store') }}" method="POST" class="me-4 mb-3 mb-md-0">
                    @csrf
                    <div class="input-group input-group-rounded">
                        <input class="form-control form-control-sm bg-light" placeholder="Email Address"
                               name="newsletterEmail" id="newsletterEmail" type="email" required>
                        <button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-lg-2 mb-5 mb-lg-0">
                <h5 class="text-4 text-color-light mb-3">@lang('backend.pages')</h5>
                <ul class="list list-unstyled mb-0">
                    <li class="mb-0"><a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                    <li class="mb-0"><a href="{{ route('frontend.index') }}">@lang('backend.news')</a></li>
                    <li class="mb-0"><a href="{{ route('frontend.index') }}">@lang('backend.posts')</a></li>
                    <li class="mb-0"><a href="{{ route('frontend.index') }}">@lang('backend.categories')</a></li>
                    <li class="mb-0"><a href="{{ route('frontend.directors') }}">@lang('frontend.directors')</a></li>
                    <li class="mb-0"><a href="{{ route('frontend.contact-us-page') }}">@lang('backend.contact-us')</a>
                    </li>
                    <li class="mb-0"><a href="{{ route('frontend.about') }}">@lang('backend.about')</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <div class="contact-details">
                    <h5 class="text-4 mb-3">@lang('backend.contact-us')</h5>
                    <ul class="list list-icons list-icons-lg">
                        <li class="mb-1"><i class="fas fa-location-arrow text-color-primary"></i>
                            <p class="m-0"><a target="_blank" href="https://goo.gl/maps/NNqmad5QY6L9Q97x9">"Dırnıs "
                                    mərasi evi</a></p>
                        </li>
                        <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i>
                            <p class="m-0"><a href="tel:">+994 50 510-0000</a></p>
                        </li>
                        <li class="mb-1"><i class="far fa-envelope text-color-primary"></i>
                            <p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-4 mb-3">@lang('backend.follow-us')</h5>
                <ul class="social-icons">
                    @foreach($settings as $setting)
                        <li class="social-icons-{{ $setting->name }}"><a href="{{ $setting->link }}" target="_blank"
                                                                         title="{{ $setting->name }}"><i
                                    class="fab fa-{{ $setting->name }}"></i></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container py-2">
            <div class="row py-4">
                <div
                    class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                    <a href="{{ route('frontend.index') }}" class="logo pe-0 pe-lg-3">
                        <img alt="Dırnıs Xeyriyyə Cəmiyyəti" src="{{ asset('frontend/images/logos/logo.png') }}"
                             class="opacity-5" width="70" height="70" data-plugin-options="{'appearEffect': 'fadeIn'}">
                    </a>
                </div>
                <div
                    class="ml-3 col-lg-5 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-end">
                    <p class="text-3">{{ now()->year }} © @lang('backend.copyright') - Dırnıs Xeyriyyə Cəmiyyəti.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
