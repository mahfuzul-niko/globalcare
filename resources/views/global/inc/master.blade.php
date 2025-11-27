@php
    $business = App\Models\Setting::find(1);
@endphp
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="@yield('description')">
    <link rel="canonical" href="{{ Request::url() }}" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title') | {{ optional($business)->name }}</title>
    <link rel="stylesheet" href=" {{ asset('global/assets') }}/css/style.css" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('global/assets') }}/css/owl.carousel.css" />
    <link rel="stylesheet" href="{{ asset('global/assets') }}/css/owl.theme.default.css" />
    <link rel="stylesheet" href="{{ asset('global/assets') }}/css/owl.theme.green.css" />
    <script src="{{ asset('global/assets') }}/js/jquery-3.7.1.min.js"></script>

    <script src="{{ asset('global/assets') }}/js/owl.carousel.js"></script>
    <link rel="stylesheet" href="{{ asset('global/assets') }}/css/main.css" />
    <meta name="author" content="Mahfuzul Islam">
</head>
<style>
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .footer {
        margin-top: auto;
    }

/* Sticky bottom bar */
.sticky-footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background: #ffffff;
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 8px 0;
    border-top: 1px solid #ddd;
    z-index: 9999;
}

/* Each link item */
.sticky-link {
    color: #444;
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 3px;
    font-size: 12px;
    position: relative;
}

/* Icons (SVG images) */
.sticky-link img {
    width: 24px;
    height: 24px;
    display: block;
}

/* Cart count badge (works with image) */
.cart-count {
    position: absolute;
    top: 0;
    right: 12px;
    background: red;
    color: white;
    font-size: 10px;
    padding: 1px 6px;
    border-radius: 50%;
    line-height: 1;
}

/* Active link indicator */
.sticky-link.active p,
.sticky-link.active img {
    filter: brightness(0) saturate(100%) invert(38%) sepia(84%) saturate(2407%) hue-rotate(203deg) brightness(91%) contrast(96%);
    /* This makes PNG/SVG icon appear blue */
}

/* Hide the footer on desktop */
@media(min-width: 768px) {
    .sticky-footer {
        display: none;
    }
}

</style>

<body>
    @include('global.inc.header')
    @yield('layout')

    <!-- Main Content -->
    <div class="main-content ml-0 lg:ml-70 xl:ml-80 2xl:ml-94 px-0 py-0 lg:pl-6 lg:pt-3">

        @yield('content')

    </div>
    {{-- mobile footer  --}}
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="{{ route('index') }}" class="sticky-link ">
            <img src="{{ asset('global/icon/home-4-svgrepo-com.svg') }}" alt="" height="24" width="24">
            <p>Home</p>
        </a>
        <a href="{{ route('products') }}" class="sticky-link">
           <img src="{{ asset('global/icon/stack-svgrepo-com.svg') }}" alt="" height="24" width="24">
            <p>Shop</p>
        </a>
        <a href="{{ route('home') }}" class="sticky-link">
           <img src="{{ asset('global/icon/person-circle-svgrepo-com.svg') }}" alt="" height="24" width="24">
            <p>Account</p>
        </a>
        <div class="cart-dropdown dir-up">
            <a href="{{ route('carts') }}" class="sticky-link">
                <img src="{{ asset('global/icon/shop-svgrepo-com.svg') }}" alt="" height="24" width="24">
                {{-- <span class="cart-count" id="mobile_total_count">{{ Cart::count() }}</span> --}}
                <p>Cart</p>
            </a>
        </div>
    </div>


    <!-- To Top -->
    <div class="to-top" style="position: fixed; bottom: 80px; right: 20px; z-index: 9999;">
        <a href="javascript:void(0)"
            class="bg-primary text-white rounded-full w-[40px] h-[40px] flex items-center justify-center">
            <i class="fa-solid fa-arrow-up"></i>
        </a>
    </div>

    {{-- <script src="{{ asset('global/assets') }}/js/script.js"></script> --}}
    <script>
        document.querySelector('.to-top a').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
    {{-- @include('global.inc.footer') --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('global/assets') }}/js/script.js"></script>
    <script>
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 2,
                },
                640: {
                    items: 3,
                },
                768: {
                    items: 4,
                },
                1280: {
                    items: 5,
                },
                1440: {
                    items: 6,
                },
            },
        });
    </script>
    <script>
        $(document).ready(function() {
            // Trigger search when typing or changing category
            $('#search_input, #search_category').on('input change', function() {
                searchProduct();
            });

            // Main AJAX search function
            function searchProduct() {
                const input = $('#search_input').val().trim();
                const category_id = $('#search_category').val();

                if (input.length < 2) {
                    $('#search_results_container').hide();
                    return;
                }

                $.ajax({
                    type: 'GET',
                    url: '{{ route('ajax.product.search') }}',
                    data: {
                        input: input,
                        category_id: category_id
                    },
                    beforeSend: function() {
                        $('#search_results_container').removeClass('hidden').show();
                        $('#search_results').html(
                            '<div class="col-span-3 text-center p-4">Searching...</div>');
                    },
                    success: function(data) {
                        if (data.trim() !== '') {
                            $('#search_results_container').show();
                            $('#search_results').html(data);
                        } else {
                            $('#search_results_container').hide();
                        }
                    },
                    error: function() {
                        $('#search_results').html(
                            '<div class="col-span-3 text-center text-red-500 p-4">Error loading results</div>'
                        );
                    }
                });
            }

            // Hide results when clicking outside
            $(document).click(function(e) {
                if (!$(e.target).closest('#product_search_form, #search_results_container').length) {
                    $('#search_results_container').hide();
                }
            });
        });
        $(document).ready(function() {
            cart_load();
        });
        @if (session('success'))
            Toastify({
                text: "{{ session('success') }}",
                backgroundColor: "linear-gradient(to right, #269E70, #00BFA6)",
                className: "success",
            }).showToast();
        @endif

        @if (session('error'))
            Toastify({
                text: "{{ session('error') }}",
                backgroundColor: "linear-gradient(to right, #EE2761, #FFA300)",
                className: "error",
            }).showToast();
        @endif

        function addToCart(product_id, selected_variation_id2, type, page, product_type2) {
            console.log('product_id:', product_id, 'selected_variation_id2:', selected_variation_id2, 'type:', type,
                'page:', page, 'product_type2:', product_type2);
            url = "{{ route('cart.add') }}";

            if (type === 'details') {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: url,
                    type: "POST",
                    data: $('#add_to_server' + product_id).serialize() +
                        '&product_id2=' + product_id +
                        '&product_type2=' + product_type2 +
                        '&selected_variation_id2=' + selected_variation_id2,
                    success: function(response) {
                        console.log('details:', response);
                        if (response.status == 'yes') {
                            cart_load();
                            success(response.reason);
                            if (page == 'checkout') {
                                window.location.href = '{{ route('checkout') }}';
                            }
                        } else {
                            error(response.reason);
                        }
                    }
                });
            } else {
                $.ajax({
                    url: url,
                    type: "POST",
                    data: {
                        product_id: product_id,
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        console.log('only:', response.status);
                        if (response.status == 'yes') {
                            cart_load();
                            $('.minicart__open--btn').click();
                            if (page == 'checkout') {
                                window.location.href = '{{ route('checkout') }}';
                            } else {
                                open_cart();
                            }
                        } else {
                            error(response.reason);
                        }
                    }
                });
            }
        }

        function cart_load() {
            $.ajax({
                url: "{{ route('ajax.load.cart.data') }}",
                type: "get",
                data: {},
                success: function(response) {
                    console.log("cart load response:", response);
                    $('#cart_count_1').text(response.cart_count);
                    $('#cart_count_2').text(response.cart_count);
                    $('#cart_count_3').text(response.cart_count);
                }
            });
        }

        function change_cart_qty(up_or_down, row_id, page) {
            $.ajax({
                type: 'get',
                url: '{{ route('ajax.cart.qty.update') }}',
                data: {
                    'up_or_down': up_or_down,
                    'row_id': row_id,
                    'page': page,
                },
                dataType: 'json', // ensure jQuery expects JSON
                success: function(data) {
                    console.log('AJAX success:', data);
                    if (data.status === 'yes') {

                        location.reload();
                    } else {
                        error(data.reason);
                    }
                },

            });
        }

        function addToWishlist(product_id) {
            //alert(product_id);
            url = "{{ route('wishlist.add') }}";
            var product_id = product_id;
            $.ajax({
                url: url,
                type: "POST",
                data: {
                    product_id: product_id,
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    // toastr.options = {
                    //   "positionClass": "toast-top-right"
                    // }
                    if (response.auth == 1) {
                        if (response.status == 0) {
                            error("Something went wrong!");
                        }
                        if (response.status == 1) {
                            success('Product Added into Wishlist!')
                            toastr.success('Product Added into Wishlist!');
                        }
                        if (response.status == 2) {
                            error('Product already in  your wishlist!');
                        }
                    } else {
                        error('You are not logged in!');
                    }
                }
            });
        }
    </script>
    <script>
        document.querySelectorAll(".thumb").forEach((thumb) => {
            thumb.addEventListener("click", function() {
                document.getElementById("mainImage").src = this.src;

                document
                    .querySelectorAll(".thumb")
                    .forEach((t) => t.classList.remove("thumb-active"));

                this.classList.add("thumb-active");
            });
        });
    </script>
    {{-- <script src="{{ asset('global/assets') }}/js/script.js"></script> --}}

</body>

</html>
