@extends('global.inc.master')
@php($business_info = business_info())

@section('title')
    Home
@endsection
@section('description')
    {{ optional($business_info)->meta_description }}
@endsection
@section('keywords')
    {{ optional($business_info)->meta_keywords }}
@endsection
@section('layout')
    <!-- Top Header -->

    <!-- Top Nav -->
    @include('global.inc.top-nav')
    <!-- side bar -->
    @include('global.inc.side-bar')
@endsection
@section('content')
    <!-- banner Carousel -->
    <div class="bannerCarousel">
        <div class="owl-carousel owl-theme rounded-lg overflow-hidden">
            @foreach ($sliders as $slider)
                <div class="item">
                    <img src="{{ asset('images/slider/' . $slider->image) }}" alt="{{ $slider->title }}"
                        style="max-height: 600px" />
                </div>
            @endforeach

        </div>
    </div>
    <script>
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
            },
        });
    </script>
    <!-- special offers -->
    <!-- Special Offer Slider -->
    <div class="categorySlider px-2 lg:px-0 py-6 lg:py-10 xl:py-14">
        <h1 class="text-2xl sm:text-3xl font-semibold mb-6 text-center">
            Especially For You
        </h1>

        <div class="owl-carousel owl-theme">

            <!-- 1 -->
            <div class="item">
                <div class="sp_offer_card bg-[linear-gradient(158deg,_#fffef9_3.3%,_#5cd163_93.34%)]">
                    <h4>Order</h4>
                    <h2>Via Whatsapp</h2>
                    <p>01812345678</p>

                    <a href="https://api.whatsapp.com/send?phone={{ optional($business_info)->whatsapp }}&text=I%20want%20to%20order%20via%20WhatsApp"
                        class="text-[#5cd163]">Call Now</a>

                    <img src="{{ asset('global/assets/images/icons/whatsapp.webp') }}" alt="" />
                </div>
            </div>

            <!-- 2 -->
            <div class="item">
                <div class="sp_offer_card bg-[linear-gradient(158deg,_#fffef9_3.3%,_#10adbe_93.34%)]">
                    <h4>Up To</h4>
                    <h2>10% Off</h2>
                    <p>+ cashback</p>

                    <a href="https://api.whatsapp.com/send?phone={{ optional($business_info)->whatsapp }}&text=I%20want%20to%20upload%20my%20prescription"
                        class="text-[#10adbe]">Upload Prescription</a>

                    <img src="{{ asset('global/assets/images/icons/prescription.webp') }}" alt="" />
                </div>
            </div>

            <!-- 3 -->
            <div class="item">
                <div class="sp_offer_card bg-[linear-gradient(158deg,_#fffef9_3.3%,_#7eb900_93.34%)]">
                    <h4>Up To</h4>
                    <h2>14% Off</h2>
                    <p>+ cashback</p>

                    <a href="https://api.whatsapp.com/send?phone={{ optional($business_info)->whatsapp }}&text=I%20want%20to%20register%20my%20pharmacy"
                        class="text-[#7eb900]">Register Pharmacy</a>

                    <img src="{{ asset('global/assets/images/icons/pharmacy.webp') }}" alt="" />
                </div>
            </div>

            <!-- 4 -->
            <div class="item">
                <div class="sp_offer_card bg-[linear-gradient(158deg,_#fffef9_3.3%,_#b094ff_93.34%)]">
                    <h4>Up To</h4>
                    <h2>60% Off</h2>
                    <p>+ cashback</p>

                    <a href="https://api.whatsapp.com/send?phone={{ optional($business_info)->whatsapp }}&text=I%20need%20healthcare%20support"
                        class="text-[#b094ff]">Healthcare</a>

                    <img src="{{ asset('global/assets/images/icons/healthcare.webp') }}" alt="" />
                </div>
            </div>

            <!-- 5 -->
            <div class="item">
                <div class="sp_offer_card bg-[linear-gradient(158deg,_#fffef9_3.3%,_#fe964a_93.34%)]">
                    <h4>Up To</h4>
                    <h2>10% Off</h2>
                    <p>16216</p>

                    <a href="https://api.whatsapp.com/send?phone={{ optional($business_info)->whatsapp }}&text=I%20want%20to%20order%20over%20phone"
                        class="text-[#fe964a]">Call To Order</a>

                    <img src="{{ asset('global/assets/images/icons/call.webp') }}" alt="" />
                </div>
            </div>

            <!-- 6 -->
            <div class="item">
                <div class="sp_offer_card bg-[linear-gradient(158deg,_#fffef9_3.3%,_#fd6a6a_93.34%)]">
                    <h4>Up To</h4>
                    <h2>25% Off</h2>
                    <p></p>

                    <a href="https://api.whatsapp.com/send?phone={{ optional($business_info)->whatsapp }}&text=I%20want%20more%20information"
                        class="text-[#fd6a6a]">Call To Order</a>

                    <img src="{{ asset('global/assets/images/icons/tube.webp') }}" alt="" />
                </div>
            </div>

        </div>

    </div>
    <script>
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
                575: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                1199: {
                    items: 4,
                },
                1280: {
                    items: 6,
                },
            },
        });
    </script>
    <!-- Category Section -->
    <!-- Category -->
    <div class="category px-2 lg:px-0">
        <h1 class="text-2xl sm:text-3xl font-semibold mb-4">Category</h1>
        <div class="category-list grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-8 gap-4">
            @foreach ($featured_categories as $category)
                <a href="{{ route('products', ['category_id' => $category->id]) }} " class="category-item">
                    <div class="category-img">
                        <img src="{{ asset('images/category/' . $category->image) }}" alt="{{ $category->title }}" />
                    </div>
                    <h4>{{ $category->title }}</h4>
                </a>
            @endforeach

        </div>
    </div>


    {{-- <!-- Product List -->
    <div class="categorySlider product-list-wrapper bg-[#E6CCCD]">
        <div class="product-list-title">
            <div>
                <h2 class="text-[#820003]">Flash Sale</h2>
                <p class="text-[#820003]">
                    Up to <b>76%</b> discount for limited time 🔥
                </p>
            </div>
            <a href="#"
                class="text-[#820003] bg-transparent border border-[#820003] hover:bg-[#820003] hover:text-white transition duration-200">See
                All
            </a>
        </div>
        <div class="product-list mt-14">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-1.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Oxygen Mask Child</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-2.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Stainless still manual Noise</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-1.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Oxygen Mask Child</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-2.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Stainless still manual Noise</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-1.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Oxygen Mask Child</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-2.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Stainless still manual Noise</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-1.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Oxygen Mask Child</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-2.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Stainless still manual Noise</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
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
    </script> --}}

    {{-- <!-- How to Order -->
    <div class="order-guide bg-[#E5F3F3]">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-y-5 gap-x-2">
            <div class="order-guide-content">
                <h1>আরোগ্য থেকে অর্ডার কিভাবে করবেন?</h1>
                <ul>
                    <li>প্রেস্ক্রিপশনের ছবি আপলোড করুন অথবা ঔষধ সার্চ করে কিনুন।</li>
                    <li>
                        আমাদের 'A Grade Pharmacist' আপনাকে ফোন করে অর্ডার কনফার্ম করবেন।
                    </li>
                    <li>১৮-৪৮ ঘন্টার মধ্য আপনার ডেলিভারি বুঝে নিন।</li>
                </ul>
                <p>ডাউনলোড করুন আরোগ্য অ্যাপ, আর উপভোগ করুন আকর্ষণীয় মূল্যছাড়।</p>

                <div class="flex gap-2">
                    <a href="#" class="block">
                        <img src="{{ asset('global/assets') }}/images/google_play.png" class="w-full" alt="Google Play" />
                    </a>
                    <a href="#" class="block">
                        <img src="{{ asset('global/assets') }}/images/apple_store.png" class="w-full" alt="App Store" />
                    </a>
                </div>
            </div>
            <div class="order-guide-video relative cursor-pointer" id="orderGuideVideo">
                <img src="{{ asset('global/assets') }}/images/howToVideo.png" alt="" class="w-full" />
                <div class="play-icon-animated absolute inset-0 flex items-center justify-center">
                    <span class="play-pulse"></span>
                    <span class="play-icon">
                        <svg width="70" height="70" viewBox="0 0 70 70" fill="none">
                            <circle cx="35" cy="35" r="35" fill="#FF4B5C" fill-opacity="0.7" />
                            <polygon points="28,22 52,35 28,48" fill="#fff" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <!-- Defend Against Covid -->
    <div class="categorySlider product-list-wrapper">
        <div class="product-list-title">
            <div>
                <h2>Defend Against Covid-19</h2>
                <p>Gear Up Against New Variants</p>
            </div>
            <a href="#"
                class="text-primary bg-transparent border border-primary hover:bg-primary hover:text-white transition duration-200">See
                All
            </a>
        </div>
        <div class="product-list mt-14">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-3.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask Surgical</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-4.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Surgical Mask 3 Layers</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-5.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask KN95</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-3.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask Surgical</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-4.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Surgical Mask 3 Layers</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-5.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask KN95</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-3.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask Surgical</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-4.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Surgical Mask 3 Layers</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-5.webp" alt="" />
                            <div class="product-discount">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask KN95</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
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
    </script> --}}

    <!-- trending products Product -->
    <div class="categorySlider product-list-wrapper">
        <div class="product-list-title">
            <div>
                <h2>Trending Products Items</h2>
                <p>Gear Up Against Trending Products</p>
            </div>
            <a href="{{ route('products') }}"
                class="text-primary bg-transparent border border-primary hover:bg-primary hover:text-white transition duration-200">See
                All
            </a>
        </div>
        <div class="product-list mt-14">
            <div class="owl-carousel owl-theme">
                @foreach ($trending_products as $product)
                    @include('global.inc.card-product', ['product' => $product])
                @endforeach

            </div>
        </div>
    </div>

    <!-- Featured Brands -->
    <div class="categorySlider px-2 lg:px-0 py-6 lg:py-10">
        <h1 class="text-2xl sm:text-3xl font-semibold mb-6">Featured Brands</h1>
        <div class="owl-carousel owl-theme">
            @foreach ($brands as $brand)
                <div class="item">
                    <a hre="#" class="brand_card">
                        <img src="{{ asset('images/brand/' . $brand->image) }}" alt="" />
                    </a>
                </div>
            @endforeach


        </div>
    </div>
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
                1199: {
                    items: 6,
                },
            },
        });
    </script>

    <!-- Featured Products  -->
    <div class="categorySlider product-list-wrapper">
        <div class="product-list-title">
            <div>
                <h2>Featured Products </h2>
                <p>Gear Up With Our Featured Products</p>
            </div>
            <a href="{{ route('products') }}"
                class="text-primary bg-transparent border border-primary hover:bg-primary hover:text-white transition duration-200">See All
            </a>
        </div>
        <div class="product-list mt-14">
            <div class="owl-carousel owl-theme">
                @foreach ($featured_products as $product)
                    @include('global.inc.card-product', ['product' => $product])
                @endforeach

            </div>
        </div>
    </div>

    {{-- <!-- Refer & Earn -->
    <div class="refer-earn px-2 bg-[#DBECE7] grid grid-cols-1 md:grid-cols-2 items-center gap-y-6 gap-x-2">
        <div class="py-10">
            <h1 class="text-2xl sm:text-5xl font-semibold mb-4">Refer & Earn</h1>
            <p class="text-lg my-5 max-w-[400px]">
                Share
                <span class="text-[#fd6a6a] font-semibold">Arogga App</span> with
                your friends & keep earning
                <span class="text-[#fd6a6a] font-semibold">40 Taka</span> each
                successful refer.
            </p>
            <a href="#"
                class="inline-block mt-6 bg-primary text-white px-8 py-4 rounded-sm text-base font-medium">Start
                Referring</a>
        </div>
        <div>
            <img src="{{ asset('global/assets') }}/images/refer-earn.jpg" class="max-w-[400px] w-full block mx-auto"
                alt="" />
        </div>
    </div> --}}

    {{-- <!-- Baby & Mom Care -->
    <div class="categorySlider product-list-wrapper">
        <div class="product-list-title">
            <div>
                <h2>Baby & Mom Care</h2>
                <p>Gear Up Against New Variants</p>
            </div>
            <a href="#"
                class="text-primary bg-transparent border border-primary hover:bg-primary hover:text-white transition duration-200">See
                All
            </a>
        </div>
        <div class="product-list mt-14">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-6.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask Surgical</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-7.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Surgical Mask 3 Layers</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-8.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask KN95</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-9.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask Surgical</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-6.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask Surgical</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-7.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Surgical Mask 3 Layers</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-8.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask KN95</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-9.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask Surgical</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
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

    <!-- Sexual Wellness -->
    <div class="categorySlider product-list-wrapper bg-[#dbece7]">
        <div class="product-list-title">
            <div>
                <h2 class="text-primary">Sexual Wellness</h2>
                <p class="text-primary">Gear Up Against New Variants</p>
            </div>
            <a href="#"
                class="text-primary bg-transparent border border-primary hover:bg-primary hover:text-white transition duration-200">See
                All
            </a>
        </div>
        <div class="product-list mt-14">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-6.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask Surgical</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-7.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Surgical Mask 3 Layers</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-8.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask KN95</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-9.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask Surgical</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-6.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask Surgical</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-7.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Surgical Mask 3 Layers</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-8.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask KN95</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-9.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask Surgical</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
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

    <!-- Flash Frenzy -->
    <div class="categorySlider product-list-wrapper">
        <div class="product-list-title">
            <div>
                <h2>Flash Frenzy 🔥</h2>
                <p>Gear Up Against New Variants</p>
            </div>
            <a href="#"
                class="text-primary bg-transparent border border-primary hover:bg-primary hover:text-white transition duration-200">See
                All
            </a>
        </div>
        <div class="product-list mt-14">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-6.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask Surgical</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-7.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Surgical Mask 3 Layers</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-8.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask KN95</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-9.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask Surgical</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-6.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask Surgical</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-7.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Surgical Mask 3 Layers</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-8.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask KN95</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="product-list-card">
                        <div class="product-list-card-img relative">
                            <img src="{{ asset('global/assets') }}/images/product-9.webp" alt="" />
                            <div class="product-off">71% Off</div>
                        </div>
                        <div class="p-2 product-content-wrapper">
                            <div class="delivery-time">
                                <img src="{{ asset('global/assets') }}/images/icons/roket.svg" alt="" />
                                <span>12-24 Hours</span>
                            </div>
                            <div class="product-content">
                                <h4>Face Mask Surgical</h4>
                            </div>

                            <div class="product-rating">
                                <div class="rating-star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <p>(5)</p>
                            </div>
                            <div class="product-btm">
                                <div class="product-price">
                                    <p>৳ 100</p>
                                    <h4>৳ 100</h4>
                                </div>
                                <div class="product-btn">
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
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
    </script> --}}
    <!-- Footer -->
    @include('global.inc.footer')
@endsection
