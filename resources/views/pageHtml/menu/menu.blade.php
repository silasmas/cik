    <!-- Start Site Header Wrap -->
    <header>
        <div class="tm-site-header">
            <div class="tm-header-info-wrap">
                <div class="container tm-header-info">
                    <a href="#"><i class="fa fa-phone"></i>+243857000908</a>
                    <a href="#"><i class="fa fa-envelope"></i>info@cik-rdc.com</a>
                </div>
            </div>
            <div class="tm-header-menu">
                <div class="container tm-header-menu-container">
                    <div class="tm-site-branding">
                        <!-- For Image Logo -->
                        <a href="#" class="tm-logo-link">
                            <img src="{{ asset('assets/img/logocik.png') }}" alt="" class="tm-logo">
                        </a>
                    </div>
                    <nav class="tm-primary-nav tm-onepage-nav">
                        <ul class="tm-primary-nav-list">
                            <li class="menu-item menu-item-has-children current-menu-ancestor current-menu-parent">
                                <a href="#home" class="nav-link tm-smooth-move">@lang('info.menu.home')</a>
                                {{-- @include("pageHtml.deroulant") --}}
                            </li>
                            <li class="menu-item"><a href="#about" class="nav-link tm-smooth-move">@lang('info.menu.about')</a></li>
                            <li class="menu-item"><a href="#department" class="nav-link tm-smooth-move">@lang('info.menu.service')</a></li>
                            <li class="menu-item"><a href="#doctor" class="nav-link tm-smooth-move">@lang('info.menu.docteur')</a></li>
                            {{-- <li class="menu-item"><a href="#gallery" class="nav-link tm-smooth-move">GALERIES</a></li> --}}
                            <li class="menu-item"><a href="#price" class="nav-link tm-smooth-move">@lang('info.menu.convention')</a></li>
                            <li class="menu-item"><a href="#contact" class="nav-link tm-smooth-move">@lang('info.menu.contact')</a></li>
                            <li class="menu-item"><a href="#appointment" class="nav-link tm-smooth-move">@lang('info.menu.rdv')</a></li>
                            {{-- <li class="menu-item menu-item-has-children"><a class="nav-link tm-smooth-move">@lang('info.menu.langue')</a>
                                <ul>
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li class="nav-item">
                                        <a hreflang="{{ $localeCode }}"
                                            class=" {{ App::currentLocale() === $localeCode ? 'active' : '' }}"
                                            href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                            rel="alternate">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach

                                </ul>
                            </li> --}}
                        </ul>
                    </nav>
                </div><!-- .tm-header-menu-container -->
            </div><!-- .tm-header-menu -->
        </div><!-- .tm-site-header -->
    </header>
    <!-- End Site Header Wrap -->
