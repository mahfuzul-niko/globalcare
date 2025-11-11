@php
    $featured_categories = featured_categories();
@endphp
<header class="header__section"> {{-- Topbar --}}
    @include('user.partials.topbar_desktop')
    <style>
        .header_text_color {
            color: <?php echo $business->header_text_color ?? ''; ?> !important;
        }
    </style>
    <div class="main__header header__sticky"
        style="
    --tw-bg-opacity: 1;
    background-color: rgb(0 0 0 / var(--tw-bg-opacity));
    ">
        <div class="container-fluid">
            <div class="main__header--inner position__relative d-flex justify-content-between align-items-center">
                <div class="offcanvas__header--menu__open ">
                    <a class="offcanvas__header--menu__open--btn header_text_color" href="javascript:void(0)"
                        data-offcanvas>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg"
                            viewBox="0 0 512 512">
                            <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352" />
                        </svg>
                        <span class="visually-hidden">Menu Open</span>
                    </a>
                </div>
                {{-- Logo --}}
                <div class="main__logo"> {{--  d-none header__sticky--none d-lg-block --}}
                    <h1 class="main__logo--title"><a class="main__logo--link" href="{{ route('index') }}"><img
                                class="main__logo--img"
                                src="{{ asset('images/website/' . optional($business)->header_logo) }}"
                                alt="{{ optional($business)->name }}"></a></h1>
                </div>
                <div class="header__search--widget d-none d-lg-block">
                    <form class="d-flex header__search--form" action="#">
                        <div class="header__select--categories select">
                            <select class="header__select--inner" id="d1_product_search_category">
                                <option selected value="all">All Categories</option>
                                @foreach ($featured_categories->take(8) as $categories)
                                    <option value="{{ $categories->id }}">{{ $categories->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="header__search--box">
                            <label>
                                <input class="header__search--input" id="d1_product_search"
                                    oninput="search_product('d1')" placeholder="Search here..." type="text">
                            </label>
                            <button class="header__search--button header_text_color" type="submit"
                                aria-label="search button">
                                <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg"
                                    width="27.51" height="26.443" viewBox="0 0 512 512">
                                    <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32">
                                    </path>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                </svg>
                            </button>
                            <div class="search_product_output mt-2" id="search_product_output_d1_main"
                                style="display:none">
                                <div class="row" id="search_product_output_d1">

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="header__account"> {{--  header__sticky--none --}}
                    <ul class="d-flex">
                        {{-- Mobile view --}}
                        <li class="header__account--items big-screen-none">
                            <a class="header__account--btn search__open--btn" href="javascript:void(0)" data-offcanvas>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                                <span class="header__account--btn__text">Search</span>
                            </a>
                        </li>
                        <li class="header__account--items big-screen-none">
                            <a class="header__account--btn"
                                @if (Auth::check()) href="{{ route('customer.account') }}" @else href="{{ route('login') }}" @endif>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="32" />
                                    <path
                                        d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                                </svg>
                                <span class="header__account--btn__text">My Account</span>
                            </a>
                        </li>
                        @php
                            $blogs = App\Models\Blog::count();
                        @endphp
                        @if ($blogs)
                            <li class="header__account--items d-none d-lg-block">
                                <a class="header__account--btn" href="{{ route('user.blog') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-newspaper">
                                        <!-- outer paper -->
                                        <rect x="2" y="3" width="20" height="18" rx="2"
                                            ry="2"></rect>

                                        <!-- masthead / picture box -->
                                        <rect x="4" y="5" width="7" height="6"></rect>

                                        <!-- headline line -->
                                        <line x1="13.5" y1="6.5" x2="20" y2="6.5"></line>

                                        <!-- three text lines -->
                                        <line x1="13.5" y1="9.5" x2="20" y2="9.5"></line>
                                        <line x1="4" y1="12.5" x2="20" y2="12.5"></line>
                                        <line x1="4" y1="15.5" x2="20" y2="15.5"></line>

                                        <!-- folded corner hint -->
                                        <path d="M20 3v5"></path>
                                    </svg>

                                    <span class="header__account--btn__text"> News </span>
                                    <span class="items__count wishlist">{{ $blogs }}</span>
                                </a>
                            </li>
                        @endif

                        <li class="header__account--items d-none d-lg-block">
                            <a class="header__account--btn" href="{{ route('customer.wishlist') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28.51" height="23.443"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z"
                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="32"></path>
                                </svg>
                                <span class="header__account--btn__text"> Wish List </span>
                                <span class="items__count wishlist">{{ $wishlist_count }}</span>
                            </a>
                        </li>
                        {{-- Mobile view --}}
                        <li class="header__account--items">
                            <a class="header__account--btn minicart__open--btn" href="javascript:void(0)"
                                data-offcanvas>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443"
                                    viewBox="0 0 14.706 13.534">
                                    <g transform="translate(0 0)">
                                        <g>
                                            <path data-name="Path 16787"
                                                d="M4.738,472.271h7.814a.434.434,0,0,0,.414-.328l1.723-6.316a.466.466,0,0,0-.071-.4.424.424,0,0,0-.344-.179H3.745L3.437,463.6a.435.435,0,0,0-.421-.353H.431a.451.451,0,0,0,0,.9h2.24c.054.257,1.474,6.946,1.555,7.33a1.36,1.36,0,0,0-.779,1.242,1.326,1.326,0,0,0,1.293,1.354h7.812a.452.452,0,0,0,0-.9H4.74a.451.451,0,0,1,0-.9Zm8.966-6.317-1.477,5.414H5.085l-1.149-5.414Z"
                                                transform="translate(0 -463.248)" fill="currentColor" />
                                            <path data-name="Path 16788"
                                                d="M5.5,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,5.5,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,6.793,478.352Z"
                                                transform="translate(-1.191 -466.622)" fill="currentColor" />
                                            <path data-name="Path 16789"
                                                d="M13.273,478.8a1.294,1.294,0,1,0,1.293-1.353A1.325,1.325,0,0,0,13.273,478.8Zm1.293-.451a.452.452,0,1,1-.431.451A.442.442,0,0,1,14.566,478.352Z"
                                                transform="translate(-2.875 -466.622)" fill="currentColor" />
                                        </g>
                                    </g>
                                </svg>
                                <span class="header__account--btn__text"> My cart</span>
                                <span class="items__count" id="cart_count_1">0</span>
                            </a>
                        </li>
                        <li class="header__account--items d-none d-lg-block">
                            <a class="header__account--btn"
                                @if (Auth::check()) href="{{ route('customer.account') }}" @else href="{{ route('register') }}" @endif>
                                <svg xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z"
                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="32" />
                                    <path
                                        d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z"
                                        fill="none" stroke="currentColor" stroke-miterlimit="10"
                                        stroke-width="32" />
                                </svg>
                                <span class="header__account--btn__text">Account Regitration</span>
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- Sticky --}}
                <div class="header__menu d-none header__sticky--none d-lg-none" title="Sticky">{{--  d-none header__sticky--block d-lg-block --}}
                    <nav class="header__menu--navigation">
                        <ul class="d-flex">
                            {{-- 2 step category menu --}}
                            @foreach ($featured_categories as $category)
                                @if (count($category->menu_child) > 0)
                                    <li class="header__menu--items style2">
                                        <a class="header__menu--link sticky_menu_link"
                                            href="#">{{ $category->title }}
                                            <svg class="menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg"
                                                width="12" height="7.41" viewBox="0 0 12 7.41">
                                                <path d="M16.59,8.59,12,13.17,7.41,8.59,6,10l6,6,6-6Z"
                                                    transform="translate(-6 -8.59)" fill="currentColor"
                                                    opacity="0.7"></path>
                                            </svg>
                                        </a>
                                        <ul class="header__sub--menu">
                                            @foreach ($category->menu_child as $p_category)
                                                <li class="header__sub--menu__items"><a
                                                        href="{{ route('products', ['category_id' => $p_category->id]) }}"
                                                        class="header__sub--menu__link">{{ $p_category->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li class="header__menu--items style2">
                                        <a class="header__menu--link sticky_menu_link"
                                            href="{{ route('products', ['category_id' => $category->id]) }}">{{ $category->title }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* .header__search--button{
    background-color:#06693B!important;
    } */
        .header__menu--link {
            color: black !important;

        }

        .sticky_menu_link {
            color: black !important;
        }
    </style>
    {{-- Category Menu None Sticky --}}
    <div class="header__bottom shadow">
        <div class="container-fluid align-items-center" style="background-color:;">{{-- #F36D21 --}}
            <div
                class="header__bottom--inner position__relative d-none d-lg-flex justify-content-between align-items-center">
                <div class="header__menu text-align">
                    <nav class="header__menu--navigation">
                        <ul class="d-flex">
                            {{-- 2 step category menu --}}
                            @foreach ($featured_categories as $category)
                                @if (count($category->menu_child) > 0)
                                    <li class="header__menu--items">
                                        <a class="header__menu--link"
                                            href="{{ route('products', ['category_id' => $category->id]) }}">
                                            {{ $category->title }}
                                        </a>
                                        <ul class="header__sub--menu">
                                            @foreach ($category->menu_child as $p_category)
                                                <li class="header__sub--menu__items">
                                                    <a href="{{ route('products', ['category_id' => $p_category->id]) }}"
                                                        class="header__sub--menu__link">
                                                        {{ $p_category->title }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li class="header__menu--items">
                                        <a class="header__menu--link"
                                            href="{{ route('products', ['category_id' => $category->id]) }}">
                                            {{ $category->title }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                            <li class="header__menu--items">
                                <a class="header__menu--link" target="_blank" href="/9/page/used-phone">
                                    Used Device
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Start Offcanvas header menu -->
    <div class="offcanvas__header">
        <div class="offcanvas__inner">
            <div class="offcanvas__logo bg-dark header_text_color">
                <a class="offcanvas__logo_link header_text_color" style="color: #ffffff !important"
                    href="{{ route('index') }}">
                    <img src="{{ asset('images/website/' . optional($business)->header_logo) }}"
                        alt="{{ optional($business)->name }}" width="158" height="36">
                </a>
                <button class="offcanvas__close--btn" data-offcanvas>close</button>
            </div>
            <nav class="offcanvas__menu">
                <ul class="offcanvas__menu_ul">
                    {{-- three step categories menu --}}
                    @foreach ($featured_categories as $category)
                        @if (count($category->menu_child) > 0)
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item text-dark"
                                    href="{{ route('products', ['category_id' => $category->id]) }}">{{ $category->title }}</a>
                                <ul class="offcanvas__sub_menu">
                                    @foreach ($category->menu_child as $p_category)
                                        <li class="offcanvas__sub_menu_li">
                                            <a href="{{ route('products', ['category_id' => $p_category->id]) }}"
                                                class="offcanvas__sub_menu_item">{{ $p_category->title }}</a>
                                            @if (count($p_category->menu_child) > 0)
                                                <ul class="offcanvas__sub_menu">
                                                    @foreach ($p_category->menu_child as $inner_sub_category)
                                                        <li class="offcanvas__sub_menu_li"><a
                                                                class="offcanvas__sub_menu_item"
                                                                href="{{ route('products', ['category_id' => $inner_sub_category->id]) }}">{{ $inner_sub_category->title }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li class="offcanvas__menu_li">
                                <a class="offcanvas__menu_item  text-dark"
                                    href="{{ route('products', ['category_id' => $category->id]) }}">{{ $category->title }}</a>
                            </li>
                        @endif
                    @endforeach

                    <li class="offcanvas__menu_li">
                        <a class="offcanvas__menu_item text-dark" target="_blank" href="/9/page/used-phone">
                            Used Device
                        </a>
                    </li>


                    {{-- three step categories menu --}}
                    <li class="offcanvas__menu_li d-none">
                        <a class="offcanvas__menu_item  text-dark" href="{{ route('wholesale') }}">Wholesale</a>
                    </li>

                </ul>
                {{--
                <div class="offcanvas__account--items">
                    <a class="offcanvas__account--items__btn d-flex align-items-center" href="login.html">
                    <span class="offcanvas__account--items__icon">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M344 144c-3.92 52.87-44 96-88 96s-84.15-43.12-88-96c-4-55 35-96 88-96s92 42 88 96z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M256 304c-87 0-175.3 48-191.64 138.6C62.39 453.52 68.57 464 80 464h352c11.44 0 17.62-10.48 15.65-21.4C431.3 352 343 304 256 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                    </span>
                    <span class="offcanvas__account--items__label">Login / Register</span>
                    </a>
                </div>
                --}}
            </nav>
        </div>
    </div>
    <!-- End Offcanvas header menu -->

    <!-- Start Offcanvas stikcy toolbar / Mobile bottom navigation -->
    <div class="offcanvas__stikcy--toolbar">
        <ul class="d-flex justify-content-between">
            @if ($blogs)
                <li class="offcanvas__stikcy--toolbar__list">
                    <a class="offcanvas__stikcy--toolbar__btn" href="{{ route('user.blog') }}">
                        <span class="offcanvas__stikcy--toolbar__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift">
                                <polyline points="20 12 20 22 4 22 4 12"></polyline>
                                <rect x="2" y="7" width="20" height="5"></rect>
                                <line x1="12" y1="22" x2="12" y2="7"></line>
                                <path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path>
                                <path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path>
                            </svg>
                        </span>
                        <span class="offcanvas__stikcy--toolbar__label">Offers</span>
                        {{-- <span class="items__count">{{$blogs}}</span> --}}
                    </a>
                </li>
            @endif
            <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn" href="{{ route('customer.wishlist') }}">
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-heart">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg>
                    </span>
                    <span class="offcanvas__stikcy--toolbar__label">Wishlist</span>
                    {{-- <span class="items__count">{{$wishlist_count}}</span> --}}
                </a>
            </li>

            <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn minicart__open--btn" href="javascript:void(0)"
                    data-offcanvas>
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-shopping-cart">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    </span>

                    <span class="offcanvas__stikcy--toolbar__label">Cart {{-- (<span id="cart_count_3">0</span>) --}}</span>
                    {{-- <span class="items__count" id="cart_count_3">0</span>  --}}
                </a>
            </li>
            <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn" href="{{ route('products') }}">
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-shopping-bag">
                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                        </svg>
                    </span>
                    <span class="offcanvas__stikcy--toolbar__label">Shop</span>
                </a>
            </li>
            <li class="offcanvas__stikcy--toolbar__list">
                <a class="offcanvas__stikcy--toolbar__btn" href="{{ route('index') }}">
                    <span class="offcanvas__stikcy--toolbar__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-home">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                    </span>
                    <span class="offcanvas__stikcy--toolbar__label">Home</span>
                </a>
            </li>


        </ul>
    </div>
    <!-- End Offcanvas stikcy toolbar / Mobile bottom navigation -->

    <!-- Start offCanvas minicart / side cart -->
    <div class="offCanvas__minicart">
        <div class="minicart__header ">
            <div class="minicart__header--top d-flex justify-content-between align-items-center">
                <h2 class="minicart__title h3"> Shopping Carts</h2>
                <button class="minicart__close--btn" aria-label="minicart close button" data-offcanvas>
                    <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="side_cart_info">


        </div>

        <div class="minicart__button d-flex justify-content-center mt-3">
            <a class="primary__btn minicart__button--link" href="{{ route('carts') }}">View cart</a>
            <a class="primary__btn minicart__button--link" href="{{ route('checkout') }}">Checkout</a>
        </div>
    </div>
    <!-- End offCanvas minicart -->

    <!-- Start serch box area -->
    <div class="predictive__search--box ">
        <div class="predictive__search--box__inner">
            <h2 class="predictive__search--title">Search Products</h2>
            <form class="predictive__search--form" action="#">
                <label>
                    <input class="predictive__search--input" id="d2_product_search" oninput="search_product('d2')"
                        placeholder="Search Here" type="text">
                </label>
                <button class="predictive__search--button" aria-label="search button" type="submit"><svg
                        class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="30.51"
                        height="25.443" viewBox="0 0 512 512">
                        <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none"
                            stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                            stroke-width="32" d="M338.29 338.29L448 448" />
                    </svg> </button>
                <div class="search_product_output">
                    <div class="row" id="search_product_output_d2">

                    </div>
                </div>
            </form>

        </div>
        <button class="predictive__search--close__btn" aria-label="search close button" data-offcanvas>
            <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51"
                height="30.443" viewBox="0 0 512 512">
                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="32" d="M368 368L144 144M368 144L144 368" />
            </svg>
        </button>
    </div>
    <!-- End serch box area -->

</header>
