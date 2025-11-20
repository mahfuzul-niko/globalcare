<!-- Top Header -->
@php
    $featured_categories = featured_categories();
@endphp
<style>
    .mobile-header-block {
        overflow: hidden;
        height: auto;
        transition: height 0.3s ease, opacity 0.3s ease;
    }

    /* Show only on mobile */
    @media (max-width: 767px) {
        .mobile-only {
            display: flex !important;
        }
    }

    /* Hidden collapsed state */
    .mobile-header-hidden {
        height: 0 !important;
        opacity: 0;
        padding: 0 !important;
        margin: 0 !important;
    }

    /* Apply hide animation ONLY on mobile */
    @media (max-width: 767px) {
        header {
            transition: transform 0.35s ease, opacity 0.25s ease;
        }

        .header-hidden {
            transform: translateY(-100%);
            opacity: 0;
            pointer-events: none;
        }
    }
</style>


<header class="bg-white py-1 border-b border-[#cccccc6d] sticky top-0 z-56">
    <div class="mobile-header-block mobile-only" style="display: none; justify-content: center;">
        <a href="{{ route('index') }}" class="items-center">
            <img src="{{ asset('images/website/' . optional($business)->header_logo) }}" class="w-[120px]"
                alt="Logo" />
        </a>
    </div>

    <div class="c-container flex items-center justify-between gap-2 ">
        <!-- Logo -->
        <div class="flex gap-4 items-center">
            <button id="mobile-menu-btn" class="cursor-pointer block lg:hidden">
                <i class="fa-solid fa-bars text-[25px]"></i>
            </button>
            <a href="{{ route('index') }}" class="hidden lg:flex items-center">
                <img src="{{ asset('images/website/' . optional($business)->header_logo) }}" class="w-[120px]"
                    alt="Logo" />
            </a>
        </div>

        <!-- Location -->
        <div
            class="hidden lg:flex items-center space-x-2 ml-6 hover:bg-hover px-2 py-2 rounded-md cursor-pointer transition duration-200">
            {{-- <i class="fa-solid fa-location-dot"></i>
            <span class="text-sm font-[600]">Delivery to <br />Bangladesh --}}
            {{-- <i class="fa-solid fa-caret-down"></i></span> --}}
        </div>

        <!-- Search Bar -->
        <!-- Product Search -->
        <div class="flex-1 relative">
            <form id="product_search_form" class="flex rounded-md overflow-hidden bg-[#F7FAFC]"
                action="javascript:void(0);">

                <select id="search_category"
                    class="bg-[#F7FAFC] px-2 py-2 md:py-0 text-sm font-medium text-gray-700 outline-none cursor-pointer hidden md:block">
                    <option value="all" selected>All Categories</option>
                    @foreach ($featured_categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>

                <input type="text" id="search_input"
                    class="flex-1 px-3 py-2 md:px-4 md:py-3 bg-transparent text-gray-700 placeholder-gray-400 outline-none"
                    placeholder='Search for "medicine products"' />

            </form>

            <!-- AJAX Results -->
            <div id="search_results_container"
                class="absolute w-full bg-white border border-gray-200 mt-2 rounded-md shadow-md hidden z-50">
                <div id="search_results" class="grid grid-cols-2 md:grid-cols-3 gap-3 p-3"></div>
            </div>
        </div>




        <!-- User & Cart -->
        <div class="flex items-center gap-2">
            <a @if (Auth::check()) href="{{ route('customer.account') }}" @else href="{{ route('login') }}" @endif
                class="flex items-center justify-center hover:bg-hover p-1 sm:p-2 rounded-md transition duration-200 cursor-pointer">
                <div
                    class="min-w-10 h-10 sm:min-w-12 sm:h-12 rounded-full bg-gray-100 flex items-center justify-center">
                    <i class="fa-solid fa-user text-gray-500"></i>
                </div>
                <div class="hidden lg:flex flex-col">
                    @auth
                        <span class="text-sm text-gray-500">Hello,
                            <span class="font-[500] text-gray-700">{{ auth()->user()->name }} <br />
                                Account & Orders</span></span>
                    @else
                        <span class="text-sm text-gray-500">Login</span>
                    @endauth

                </div>
            </a>
            <a href="{{ route('carts') }}" class="relative">
                <i class="fa-solid fa-cart-shopping text-[20px]"></i>
                <span
                    class="absolute -top-3 -right-3 h-5 w-5 bg-red-500 text-white text-xs rounded-full flex justify-center items-center cart-count"
                    id="cart_count_1">0</span>
            </a>
        </div>
    </div>
</header>
<script>
    let lastScroll = 0;
    const header = document.querySelector('header');

    window.addEventListener('scroll', function() {
        let currentScroll = window.pageYOffset;

        // Scroll Down → Hide
        if (currentScroll > lastScroll && currentScroll > 20) {
            header.classList.add('header-hidden');
        }
        // Scroll Up → Show
        else {
            header.classList.remove('header-hidden');
        }

        lastScroll = currentScroll;
    });
</script>
