<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                @can('dashboard index')
                    <li>
                        <a href="{{ route('backend.dashboard') }}" class="waves-effect">
                            <i class="ri-home-4-fill"></i>
                            <span>@lang('backend.dashboard')</span>
                        </a>
                    </li>
                @endcan
                @can('posts index')
                    <li class="menu-title">@lang('backend.site-setting')</li>
                    <li>
                        <a href="{{ route('backend.posts.index') }}" class="waves-effect">
                            <i class="fas fa-blog"></i>
                            <span>@lang('backend.posts')</span>
                        </a>
                    </li>
                @endcan
                @can('slider index')
                    <li>
                        <a href="{{ route('backend.slider.index') }}" class="waves-effect">
                            <i class="fas fa-sliders-h"></i>
                            <span>@lang('backend.slider')</span>
                        </a>
                    </li>
                @endcan
                @can('about index')
                    <li>
                        <a href="{{ route('backend.about.index') }}" class="waves-effect">
                            <i class="fas fa-info"></i>
                            <span>@lang('backend.about')</span>
                        </a>
                    </li>
                @endcan
                @can('categories index')
                    <li>
                        <a href="{{ route('backend.categories.index') }}" class="waves-effect">
                            <i class="fas fa-bars"></i>
                            <span>@lang('backend.categories')</span>
                        </a>
                    </li>
                @endcan
                @can('languages index')
                    <li>
                        <a href="{{ route('backend.site-languages.index') }}" class="waves-effect">
                            <i class="fas fa-language"></i>
                            <span>@lang('backend.languages')</span>
                        </a>
                    </li>
                @endcan
                @can('contact-us index')
                    <li>
                        <a href="{{ route('backend.contact-us.index') }}" class="waves-effect">
                            <i class="ri-contacts-fill"></i>
                            <span>@lang('backend.contact-us')</span>
                        </a>
                    </li>
                @endcan
                @can('settings index')
                    <li>
                        <a href="{{ route('backend.settings.index') }}" class="waves-effect">
                            <i class="ri-settings-2-fill"></i>
                            <span>@lang('backend.settings')</span>
                        </a>
                    </li>
                @endcan
                @can('seo-tags index')
                    <li class="menu-title">@lang('backend.seo-settings')</li>
                    <li>
                        <a href="{{ route('backend.seo.index') }}" class="waves-effect">
                            <i class="fas fa-tags"></i>
                            <span>@lang('backend.tags')</span>
                        </a>
                    </li>
                @endcan
                @can('users index')
                    <li class="menu-title">@lang('backend.ap-setting')</li>

                    <li>
                        <a href="{{ route('backend.users.index') }}" class=" waves-effect">
                            <i class="ri-account-circle-fill"></i>
                            <span>@lang('backend.users')</span>
                        </a>
                    </li>
                @endcan
                @can('permissions index')
                    <li>
                        <a href="{{ route('backend.permissions.index') }}" class=" waves-effect">
                            <i class="ri-lock-2-fill"></i>
                            <span>@lang('backend.permissions')</span>
                        </a>
                    </li>
                @endcan
                @can('new-permission index')
                    <li>
                        <a href="{{ route('backend.givePermission') }}" class=" waves-effect">
                            <i class="ri-lock-unlock-fill"></i>
                            <span>@lang('backend.give-permission')</span>
                        </a>
                    </li>
                @endcan
                @can('report index')
                    <li>
                        <a href="{{ route('backend.report') }}" class="waves-effect">
                            <i class="fas fa-file"></i>
                            <span>@lang('backend.report')</span>
                        </a>
                    </li>
                @endcan
                @can('information index')
                    <li class="menu-title">@lang('backend.user-setting')</li>
                    <li>
                        <a href="{{ route('backend.my-informations.index') }}" class=" waves-effect">
                            <i class="ri-information-fill"></i>
                            <span>@lang('backend.informations')</span>
                        </a>
                    </li>
                @endcan
            </ul>
        </div>
    </div>
</div>
