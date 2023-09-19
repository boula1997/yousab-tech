<!-- Preloader -->
{{-- <div class="preloader flex-column justify-content-center align-items-center">
            <a href="{{ route('front.home') }}">
                <img class="animation__shake" src="{{ asset('admin/img/logo.png') }}" alt="AdminLTELogo"
                    height="60" width="60">
            </a>
        </div> --}}

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            {{-- <a href="{{ route('front.home') }}" class="nav-link">@lang('general.home')</a> --}}
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('dashboard') }}" class="nav-link">@lang('general.home')</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="@lang('general.search')"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>



        </li>

        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li class="{{ app()->getLocale() == $localeCode ? 'd-none' : '' }}">
                <a rel="alternate" hreflang="{{ $localeCode }}"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    <img src="{{ asset('flags/' . $localeCode . '.png') }}" class="flag" alt="KSA Flag">
                </a>
            </li>
        @endforeach


        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('messages.index') }}">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">{{ itemsCount('messages') }}</span>
            </a>
            {{-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="User Avatar"
                            class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{ asset('dist/img/user8-128x128.jpg') }}" alt="User Avatar"
                            class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="{{ asset('dist/img/user3-128x128.jpg') }}" alt="User Avatar"
                            class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div> --}}
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        {{-- <div class="d-flex justify-content-center">
            <img class="logo-side" src="{{ settings()->logo }}" alt="">
        </div> --}}
        <div class="">
            <!-- Sidebar user panel (optional) -->
            <a href="{{ route('edit.profile') }}">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ auth('admin')->user()->file ? auth('admin')->user()->image : '' }}"
                            class="img-circle elevation-2" alt="Edit Your Profile">
                    </div>
                    <div class="info">
                        <a href="{{ route('edit.profile') }}" class="d-block">{{ auth('admin')->user()->name }}</a>
                    </div>
                </div>
            </a>
        </div>




        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

                @can('admin-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                @lang('general.admins')
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('admins') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admins.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('role-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                @lang('general.roles')
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('roles') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('roles.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('user-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                @lang('general.users')
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('users') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('users.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan


                @can('slider-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                @lang('general.sliders') <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('sliders') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('sliders.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('service-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                @lang('general.services') <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('services') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('services.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('testimonial-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                @lang('general.testimonials') <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('testimonials') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('testimonials.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('process-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                @lang('general.processes') <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('processes') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('processes.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('portfolio-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                @lang('general.portfolios')
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('Portfolios') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('portfolios.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('page-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                @lang('general.pages')
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('pages') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('pages.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('faq-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                @lang('general.faqs') <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('faqs') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('faqs.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('counter-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                @lang('general.counters') <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('counters') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('counters.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('contact-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                @lang('general.contacts') <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('contacts') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('contacts.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('video-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                @lang('general.videos') <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('videos') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('videos.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('message-list')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                @lang('general.messages') <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">{{ itemsCount('messages') }}</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('messages.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>@lang('general.show')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can('setting-list')
                    <li class="nav-item">
                        <a href="{{ route('edit.setting') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                @lang('general.settings')
                                {{-- <span class="right badge badge-danger">@lang('general.new')</span> --}}
                            </p>
                        </a>
                    </li>
                @endcan

                <li class="nav-item pb-3">

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <i class="nav-icon  fa fa-sign-out text-white" aria-hidden="true"></i>
                        <button class="btn text-secondary" type="submit">@lang('general.logout')</button>

                    </form>
                </li>   
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
