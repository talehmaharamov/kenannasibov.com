<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{ route('backend.dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>@lang('backend.dashboard')</span>
                    </a>
                </li>
                @hasanyrole(['admin','writer'])
                <li class="menu-title">@lang('backend.site-setting')</li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="fas fa-newspaper"></i>
                        <span>@lang('backend.news')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('backend.posts.index') }}" class="waves-effect">
                        <i class="fas fa-blog"></i>
                        <span>@lang('backend.posts')</span>
                    </a>
                </li>
                @endhasanyrole

                @role('admin')


                <li>
                    <a href="{{ route('backend.directors.index') }}" class="waves-effect">
                        <i class="fas fa-users"></i>
                        <span>@lang('frontend.directors')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('backend.about.index') }}" class="waves-effect">
                        <i class="fas fa-info"></i>
                        <span>@lang('backend.about')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('backend.categories.index') }}" class="waves-effect">
                        <i class="fas fa-bars"></i>
                        <span>@lang('backend.categories')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('backend.site-languages.index') }}" class="waves-effect">
                        <i class="fas fa-language"></i>
                        <span>@lang('backend.languages')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('backend.contact-us.index') }}" class="waves-effect">
                        <i class="ri-contacts-fill"></i>
                        <span>@lang('backend.contact-us')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('backend.settings.index') }}" class="waves-effect">
                        <i class="ri-settings-2-fill"></i>
                        <span>@lang('backend.settings')</span>
                    </a>
                </li>
                @endrole
                @hasanyrole(['admin','seo'])
                <li class="menu-title">@lang('backend.seo-settings')</li>
                <li>
                    <a href="{{ route('backend.seo.index') }}" class="waves-effect">
                        <i class="fas fa-tags"></i>
                        <span>@lang('backend.tags')</span>
                    </a>
                </li>
                @endhasanyrole
                @role('admin')
                <li class="menu-title">@lang('backend.ap-setting')</li>

                <li>
                    <a href="{{ route('backend.admins.index') }}" class=" waves-effect">
                        <i class="ri-account-circle-fill"></i>
                        <span>@lang('backend.admins')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('backend.admins.create') }}" class=" waves-effect">
                        <i class="ri-admin-fill"></i>
                        <span>@lang('backend.add-new-admin')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('backend.writers.index') }}" class=" waves-effect">
                        <i class="fas fa-edit"></i>
                        <span>@lang('backend.writers')</span>
                    </a>
                </li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="ri-pencil-fill"></i>
                        <span>@lang('backend.add-new-writer')</span>
                    </a>
                </li>
                @endrole
                @hasanyrole(['admin','writer'])
                <li class="menu-title">@lang('backend.user-setting')</li>
                <li>
                    <a href="{{ route('backend.my-informations.index') }}" class=" waves-effect">
                        <i class="ri-information-fill"></i>
                        <span>@lang('backend.informations')</span>
                    </a>
                </li>
                @endhasanyrole
            </ul>
        </div>
    </div>
</div>
