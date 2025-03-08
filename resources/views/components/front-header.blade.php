<header class="header">
    <div class="header__container">
        <div class="header__logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/logo.png') }}" alt="Logo">
            </a>
        </div>
        <div class="search-form">
            <div>
                <input type="text" placeholder="{{ __('Search for products') }}" class="search-form__input">
                <div class="search-form__filter">
                    <div data-action="dropdown" class="search-form__filtered">
                        <span>{{ __('Filter') }}</span> <i class="icon"></i>
                    </div>
                </div>
            </div>
            <button type="submit" class="search-form__button">
                <i class="icon icon-search"></i>
            </button>
        </div>
        <button class="search-btn">
            <i class="icon icon-search"></i>
        </button>
        <div class="header__sections">
            <a href="#">
                <span>
                    <i class="icon icon-user"></i>
                </span>
                {{-- <p>{{ __('My account') }}</p> --}}
            </a>
            <a href="#">
                <span>
                    <i class="icon icon-heart"></i>
                </span>
            </a>
            <a href="#">
                <span>
                    <i class="icon icon-shopping-cart"></i>
                </span>
            </a>
        </div>
        <div id="hamburger" class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <nav>
        <a href="#">{{ __('Women') }}</a>
        <a href="#">{{ __('Men') }}</a>
        <a href="#">{{ __('Categories') }}</a>
        <a href="#">{{ __('Blog') }}</a>
        <a href="#">{{ __('Contact') }}</a>
    </nav>
</header>
