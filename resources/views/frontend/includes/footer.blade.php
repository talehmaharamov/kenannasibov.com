<footer id="footer">
    <div class="container">
        <div class="row justify-content-center py-4 my-2">
            <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">
                <h5 class="text-4 mb-3">@lang('backend.news')</h5>
                <label class="pe-1 mb-3 footer-p">@lang('messages.newsletter')</label>
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
                <form action="{{ route('frontend.newsletter') }}" method="POST" class="me-4 mb-3 mb-md-0">
                    @csrf
                    <div class="input-group input-group-rounded">
                        <input class="form-control form-control-sm bg-light" placeholder="@lang('backend.email')" name="newsletterEmail" id="newsletterEmail" type="email" required>
                        <button class="btn btn-light text-color-dark" type="submit"><strong>@lang('frontend.send')</strong></button>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-4 text-color-light mb-3">@lang('backend.pages')</h5>
                <ul class="list list-unstyled mb-0">
                    <li class="mb-0"><i class="fas fa-angle-right"></i> <a href="{{ route('frontend.index') }}">@lang('backend.home-page')</a></li>
                    <li class="mb-0"><i class="fas fa-angle-right"></i> <a href="{{ route('frontend.allPosts') }}">@lang('backend.news')</a></li>
                    <li class="mb-0"><i class="fas fa-angle-right"></i> <a href="{{ route('frontend.contact-us-page') }}">@lang('backend.contact-us')</a></li>
                    <li class="mb-0"><i class="fas fa-angle-right"></i> <a href="{{ route('frontend.about') }}">@lang('backend.about')</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3 mb-4 mb-md-0">
                <div class="contact-details">
                    <h5 class="text-4 mb-3">@lang('backend.contact-us')</h5>
                    <ul class="list list-icons list-icons-lg">
                        <li class="mb-1"><i class="fas fa-location-arrow text-color-primary"></i>
                            <label class="m-0"><a target="_blank" href="https://goo.gl/maps/NNqmad5QY6L9Q97x9">Dırnıs mərasi evi</a></label>
                        </li>
                        <li class="mb-1"><i class="fas fa-phone-alt text-color-primary"></i>
                            <label class="m-0"><a href="tel:{{ settings('phone') }}">{{ settings('phone') }}</a></label>
                        </li>
                        <li class="mb-1"><i class="far fa-envelope text-color-primary"></i>
                            <label class="m-0"><a href="mailto:{{ settings('email') }}">{{ settings('email') }}</a></label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-lg-2 ">
                <h5 class="text-4 mb-3">@lang('backend.follow-us')</h5>
                <ul class="social-icons">
                    <li class="social-icons-facebook">
                        <a href="{{ settings('facebook') }}" target="_blank" title="Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="social-icons-instagram">
                        <a href="{{ settings('instagram') }}" target="_blank" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="social-icons">
                        <a href="{{ settings('telegram') }}" target="_blank" title="Telegram">
                            <i class="fab fa-telegram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container py-2">
            <div class="row">
                <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                    <a href="{{ route('frontend.index') }}" class="logo pe-0 pe-lg-3">
                        <img alt="Dırnıs Xeyriyyə Cəmiyyəti" src="{{ asset('frontend/images/logos/logo.png') }}" class="opacity-5" width="70" height="70" data-plugin-options="{'appearEffect': 'fadeIn'}">
                    </a>
                </div>
                <div class="ml-3 col-lg-5 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-end">
                    <p class="text-3">{{ now()->year }} © @lang('backend.copyright') - Dırnıs Xeyriyyə Cəmiyyəti.</p>
                </div>
            </div>
        </div>
    </div>
</footer>