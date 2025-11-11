<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arogga</title>
    <link rel="stylesheet" href=" {{ asset('global/assets') }}/css/style.css" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('global/assets') }}/css/owl.carousel.css" />
    <link rel="stylesheet" href="{{ asset('global/assets') }}/css/owl.theme.default.css" />
    <link rel="stylesheet" href="{{ asset('global/assets') }}/css/owl.theme.green.css" />
    <script src="{{ asset('global/assets') }}/js/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('global/assets') }}/js/owl.carousel.js"></script>
</head>

<body>

    @yield('layout')






    <!-- Main Content -->
    <div class="main-content ml-0 lg:ml-70 xl:ml-80 2xl:ml-94 px-0 py-0 lg:pl-6 lg:pt-3">
        @yield('content')
       

        
        

       

        

        <!-- Product List -->
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
        </script>

        <!-- How to Order -->
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
                            <img src="{{ asset('global/assets') }}/images/google_play.png" class="w-full"
                                alt="Google Play" />
                        </a>
                        <a href="#" class="block">
                            <img src="{{ asset('global/assets') }}/images/apple_store.png" class="w-full"
                                alt="App Store" />
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
        </div>

        <!-- Defend Against Covid -->
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
        </script>

        <!-- Featured Brands -->
        <div class="categorySlider px-2 lg:px-0 py-6 lg:py-10">
            <h1 class="text-2xl sm:text-3xl font-semibold mb-6">Featured Brands</h1>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <a hre="#" class="brand_card">
                        <img src="{{ asset('global/assets') }}/images/brand-1.webp" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a hre="#" class="brand_card">
                        <img src="{{ asset('global/assets') }}/images/brand-2.webp" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a hre="#" class="brand_card">
                        <img src="{{ asset('global/assets') }}/images/brand-3.webp" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a hre="#" class="brand_card">
                        <img src="{{ asset('global/assets') }}/images/brand-4.webp" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a hre="#" class="brand_card">
                        <img src="{{ asset('global/assets') }}/images/brand-5.webp" alt="" />
                    </a>
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
                    1199: {
                        items: 6,
                    },
                },
            });
        </script>

        <!-- Newly Launched Product -->
        <div class="categorySlider product-list-wrapper">
            <div class="product-list-title">
                <div>
                    <h2>Newly Launched Items</h2>
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

        <!-- Refer & Earn -->
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
                <img src="{{ asset('global/assets') }}/images/refer-earn.jpg"
                    class="max-w-[400px] w-full block mx-auto" alt="" />
            </div>
        </div>

        <!-- Baby & Mom Care -->
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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
                                    <img src="{{ asset('global/assets') }}/images/icons/roket.svg"
                                        alt="" />
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

        <!-- Footer -->
        <div class="footer bg-[#080909] py-10 px-2 text-white">
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-2">
                <div class="footer-item xl:text-center xl:px-4">
                    <a href="#" class="inline-block mx-auto">
                        <img src="{{ asset('global/assets') }}/images/logo.svg" class="w-[120px]"
                            alt="" />
                    </a>
                    <p class="my-5 text-sm font-normal max-w-[200px] w-full">
                        Connect our specialist doctor at any time from any where
                    </p>
                    <img src="{{ asset('global/assets') }}/images/legitscript.png"
                        class="w-[150px] block xl:mx-auto" alt="" />
                    <p class="mt-5 text-sm font-normal max-w-[200px] w-full">
                        Bangladesh's only LegitScript certified online healthcare platform
                    </p>
                </div>
                <div class="footer-item">
                    <div>
                        <h3>Company</h3>
                        <ul>
                            <li>
                                <a href="#">Careers
                                    <span class="bg-primary text-white px-2 py-1 text-xs rounded-sm">We are
                                        hiring</span></a>
                            </li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms and Conditions</a></li>
                            <li><a href="#">Return and Refund Policy</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>Our Services</h3>
                        <ul>
                            <li><a href="#">Order Medicine</a></li>
                            <li><a href="#">Healthcare Products</a></li>
                            <li><a href="#">Lab Test</a></li>
                            <li><a href="#">Beauty</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-item">
                    <div>
                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Account</a></li>
                            <li><a href="#">Register the Pharmacy</a></li>
                            <li><a href="#">Special Offers</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>Download Our App</h3>
                        <div class="flex flex-col gap-y-3">
                            <a href="#">
                                <img src="{{ asset('global/assets') }}/images/google_play.png" alt="" />
                            </a>
                            <a href="#">
                                <img src="{{ asset('global/assets') }}/images/apple_store.png" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="footer-item">
                    <div>
                        <h3>Contact Info</h3>
                        <ul>
                            <li>
                                <a href="#" target="_blank">D/15-1, Road-36, Block-D, Section-10, Mirpur,
                                    Dhaka-1216</a>
                            </li>
                            <li><a href="tel:09610016778">Hot Line: 09610016778</a></li>
                            <li><a href="tel:01810-117100">Whatsapp: 01810-117100</a></li>
                        </ul>
                        <div class="social-links mt-4">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('global/assets') }}/images/payment-method.png" alt="" />
                    </div>
                </div>
            </div>
            <div class="copyright flex flex-wrap gap-y-3 justify-between mt-10 pt-10 border-t border-white/10">
                <p class="text-sm">
                    <strong>Trade License:</strong> TRAD/DNCC/057602/2022
                    <strong>DBID:</strong> 915741315
                </p>
                <p class="text-sm">©2025 Arogga Limited. All rights reserved.</p>
            </div>
        </div>
    </div>



    <!-- To Top -->
    <div class="to-top fixed bottom-10 right-10 z-56">
        <a href="javascript:void(0)"
            class="bg-primary text-white rounded-full w-[40px] h-[40px] flex items-center justify-center">
            <i class="fa-solid fa-arrow-up"></i>
        </a>
    </div>

    <script src="{{ asset('global/assets') }}/js/script.js"></script>
</body>

</html>
