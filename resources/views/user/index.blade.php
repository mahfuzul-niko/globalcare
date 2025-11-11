
@extends('user.inc.master')
@php( $business_info = business_info() )

@section('title')Home @endsection
@section('description'){{optional($business_info)->meta_description}}@endsection
@section('keywords'){{optional($business_info)->meta_keywords}}@endsection

@section('content')

@include('user.partials.slider')

{{-- Secure Payment--}}
{{-- <div style="background-color:var(--bg-gray-color2) !important;">
    <div class="container mt-2 mb-4">
        <div class="header__bottom--inner position__relative d-none d-lg-flex justify-content-between align-items-center">
            <div class="header__menu text-align">
                <nav class="header__menu--navigation">
                    <ul class="d-flex">
                        <li class="header__menu--items">
                            <a class="header__menu--link" style="color: var(--bullet-color) !important; ">
                                <img src="{{ asset('assets/icon/money.png') }}" alt="">    
                                0% EMI
                            </a>
                        </li>
                        <li class="header__menu--items">
                            <a class="header__menu--link" style="color: var(--bullet-color) !important; ">
                                <img src="{{ asset('assets/icon/group.png') }}" alt=""> 
                                24/7 Online Support
                            </a>
                        </li>
                        <li class="header__menu--items">
                            <a class="header__menu--link" style="color: var(--bullet-color) !important; ">
                                <img src="{{ asset('assets/icon/credit-card.png') }}" alt="">
                                No Charge On Card Payment
                            </a>
                        </li>
                        <li class="header__menu--items">
                            <a class="header__menu--link" style="color: var(--bullet-color) !important; ">
                                <img src="{{ asset('assets/icon/school-bus.png') }}" alt="">
                                Cash on delivery in 64 districts
                            </a>
                        </li>
                        <li class="header__menu--items">    
                            <a class="header__menu--link" style="color: var(--bullet-color) !important; ">
                                <img src="{{ asset('assets/icon/exchange.png') }}" alt="">
                                Exchange
                            </a>
                        </li>
                        <li class="header__menu--items">
                            <a class="header__menu--link" style="color: var(--bullet-color) !important; ">
                                <img src="{{ asset('assets/icon/secure-payment.png') }}" alt="">
                                100% Secure Payment
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div> --}}
<style>
    @media only screen and (max-width:767px){
        .d-sm{ display: block !important;}
    }
</style>
{{-- mobile secure payment--}}
{{-- <div style="background-color: var(--bg-gray-color2) !important;">
    <div class="container mt-2 mb-4">
        <div class="d-none d-sm">
            <div class="header__menu text-align">
                <nav class="header__menu--navigation">
                    <ul class="row">
                        <li class="col-6  mb-2">
                            <a class="header__menu--link d-flex align-items-center" style="color: var(--bullet-color) !important;">
                                <img src="{{ asset('assets/icon/money.png') }}" alt="" class="me-2">    
                                0% EMI
                            </a>
                        </li>
                        <li class="col-6  mb-2">
                            <a class="header__menu--link d-flex align-items-center" style="color: var(--bullet-color) !important;">
                                <img src="{{ asset('assets/icon/group.png') }}" alt="" class="me-2"> 
                                24/7 Online Support
                            </a>
                        </li>
                        <li class="col-6  mb-2">
                            <a class="header__menu--link d-flex align-items-center" 
                            style="width:auto !important; line-height: 2rem !important; color: var(--bullet-color) !important;">
                                <img src="{{ asset('assets/icon/credit-card.png') }}" alt="" class="me-2">
                                No Charge On Card Payment
                            </a>
                        </li>
                        <li class="col-6  mb-2">
                            <a class="header__menu--link d-flex align-items-center" 
                            style="width:auto !important; line-height: 2rem !important; color: var(--bullet-color) !important;">
                                <img src="{{ asset('assets/icon/school-bus.png') }}" alt="" class="me-2">
                                Cash on delivery in 64 districts
                            </a>
                        </li>
                        <li class="col-6  mb-2">    
                            <a class="header__menu--link d-flex align-items-center" style="color: var(--bullet-color) !important;">
                                <img src="{{ asset('assets/icon/exchange.png') }}" alt="" class="me-2">
                                Exchange
                            </a>
                        </li>
                        <li class="col-6  mb-2">
                            <a class="header__menu--link d-flex align-items-center" style="color: var(--bullet-color) !important;">
                                <img src="{{ asset('assets/icon/secure-payment.png') }}" alt="" class="me-2">
                                100% Secure Payment
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div> --}}

{{-- desktop secure payment--}}
{{-- <div style="background-color:var(--bg-gray-color2) !important;" class="d-none">
    <div class="container mt-2 mb-4">
        <div class="header__bottom--inner d-none d-sm-flex justify-content-between align-items-center">
            <div class="header__menu text-center">
                <nav class="header__menu--navigation">
                    <ul class="text-center" style="margin: auto !important">
                        <li class="header__menu--items">
                            <a class="header__menu--link" style="color: var(--bullet-color) !important; ">
                                <img src="{{ asset('assets/icon/money.png') }}" alt="">    
                                0% EMI
                            </a>
                        </li>
                        <li class="header__menu--items">
                            <a class="header__menu--link" style="color: var(--bullet-color) !important; ">
                                <img src="{{ asset('assets/icon/group.png') }}" alt=""> 
                                24/7 Online Support
                            </a>
                        </li>
                        <li class="header__menu--items">
                            <a class="header__menu--link" style="color: var(--bullet-color) !important; ">
                                <img src="{{ asset('assets/icon/credit-card.png') }}" alt="">
                                No Charge On Card Payment
                            </a>
                        </li>
                        <li class="header__menu--items">
                            <a class="header__menu--link" style="color: var(--bullet-color) !important; ">
                                <img src="{{ asset('assets/icon/school-bus.png') }}" alt="">
                                Cash on delivery in 64 districts
                            </a>
                        </li>
                        <li class="header__menu--items">    
                            <a class="header__menu--link" style="color: var(--bullet-color) !important; ">
                                <img src="{{ asset('assets/icon/exchange.png') }}" alt="">
                                Exchange
                            </a>
                        </li>
                        <li class="header__menu--items">
                            <a class="header__menu--link" style="color: var(--bullet-color) !important; ">
                                <img src="{{ asset('assets/icon/secure-payment.png') }}" alt="">
                                100% Secure Payment
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div> --}}
{{-- Bullet Point Start--}}
{{-- <div class="container-fluid">
    <div class="row">
        @for ($n=1; $n<=4; $n++)
            <div class="col-xl-3 col-lg-3 col-md-6 col-6 mb-3">
                <div class="card">
                    <div class="card-body bullet-point">
                        
                        <div class="row">
                            <div class="col-4" style="
                                display: flex;
                                align-items: center;
                                justify-content: center;
                            ">
                            <div class="rounded-circle bullet-point-image" style="background-color:var(--bullet-color);">
                                @if ($n==1)
                                <svg xmlns="http://www.w3.org/2000/svg" width="" height="" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call text-white text-2xl"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                @elseif($n==2)
                                    <svg class="text-white" height="" width="" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H5.17L4 17.17V4h16v12z"></path><path d="M12 15l1.57-3.43L17 10l-3.43-1.57L12 5l-1.57 3.43L7 10l3.43 1.57z"></path></svg>
                                @elseif($n==3)
                                    <svg class="text-white" height="" width="" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>
                                @elseif($n==4)
                                    <svg class="text-white" height="" width="" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 176a80 80 0 1080 80 80.24 80.24 0 00-80-80zm172.72 80a165.53 165.53 0 01-1.64 22.34l48.69 38.12a11.59 11.59 0 012.63 14.78l-46.06 79.52a11.64 11.64 0 01-14.14 4.93l-57.25-23a176.56 176.56 0 01-38.82 22.67l-8.56 60.78a11.93 11.93 0 01-11.51 9.86h-92.12a12 12 0 01-11.51-9.53l-8.56-60.78A169.3 169.3 0 01151.05 393L93.8 416a11.64 11.64 0 01-14.14-4.92L33.6 331.57a11.59 11.59 0 012.63-14.78l48.69-38.12A174.58 174.58 0 0183.28 256a165.53 165.53 0 011.64-22.34l-48.69-38.12a11.59 11.59 0 01-2.63-14.78l46.06-79.52a11.64 11.64 0 0114.14-4.93l57.25 23a176.56 176.56 0 0138.82-22.67l8.56-60.78A11.93 11.93 0 01209.94 26h92.12a12 12 0 0111.51 9.53l8.56 60.78A169.3 169.3 0 01361 119l57.2-23a11.64 11.64 0 0114.14 4.92l46.06 79.52a11.59 11.59 0 01-2.63 14.78l-48.69 38.12a174.58 174.58 0 011.64 22.66z"></path></svg>
                                @endif
                            </div>
                            </div>
                            <div class="col-8">
                                
                                @if ($n==1)
                                    <div class="row bullet-point-t">Outfit Finder</div>
                                    <div class="row bullet-point-p">Find Outfit for Gadgets</div>
                                @elseif($n==2)
                                <div class="row bullet-point-t">Share Experience</div>
                                <div class="row bullet-point-p">We Value your Feedback</div>
                                @elseif($n==3)
                                    <div class="row bullet-point-t">Online Support</div>
                                    <div class="row bullet-point-p">Get Support on WhatsApp</div>
                                @elseif($n==4)
                                <a href="/10/page/used-phone" class="text-dark" style="text-decoration:none;">
                                    <div class="row bullet-point-t">{{ optional($business_info)->name }} Care</div>
                                    <div class="row bullet-point-p">Repair Your Device</div>
                                </a>
                                @endif
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>  --}}

{{-- ./ Bullet Point End --}}
<section class="team__section py-5">
    <div class="container-fluid">
        <div class="section__heading text-center mb-50">
            <h2 title="Get your desired product from featured category" class="section__heading--maintitle">Featured Categories</h2>
        </div> 
            <div class="row 
            
                cat-cols-xxl-8
                cat-cols-xl-8 
                cat-cols-lg-8 
                cat-cols-md-6 
                cat-cols-sm-4 
                cat-cols-4
                ">
                 @foreach($featured_categories as $category)
                 <div class="p-2">
                     <div class="rounded shadow cat-zoom cat-py-5 cat-box text-center">
                         <a href="{{route('products', ['category_id'=>$category->id])}}">
                            <div class="row text-center">
                                <div class="col-12 mb-2">
                                    <img class="cat-image" style="" src="{{ asset('images/category/'.$category->image ) }}" alt="{{$category->title}}">
                                </div>
                                <div class="col-12 cat-title-box">
                                    <p class="cat-title"> {{$category->title}} </p> 
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</section>
{{-- Featured Products --}}
@if ($featured_products->count()>0)
<section class="product__section section--padding py-5">
    <div class="container-fluid">
        <div class="section__heading text-center mb-50">
            <h2 title="Get your desired product from Featured Products" class="section__heading--maintitle">Featured Products</h2>
            <div class="btn_custom mb-2 ">
                <a class=" rounded shop_more_btn" href="{{route('products.individual.group', ['slug'=>'featured'])}}">Shop More
                    <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                    <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                    </svg>
                </a>
            </div>
        </div> 
        {{-- <div class="section__heading mb-2 border-bottom d-flex d-none">
            <h2 class="section__heading--style2 flex-grow-1">Featured Products </h2>
            <div class="btn_custom mb-2 ">
                <a class=" rounded shop_more_btn" href="{{route('products.individual.group', ['slug'=>'featured'])}}">Shop More
                    <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                    <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                    </svg>
                </a>
            </div>
        </div> --}}
        <div class="product__section--inner">
            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                @foreach($featured_products as $product)
                    @include('user.partials.product')
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
<div id="flash_sale_offer"></div>

@include('user.partials.home_page_four_banner')
{{-- Trending Now --}}
@if ($trending_products->count()>0)
<section class="product__section section--padding pt-0" style="padding-bottom: 3rem !important;">
    <div class="container-fluid">
        <div class="section__heading text-center mb-50">
            <h2 title="Get your desired product from Trending Now" class="section__heading--maintitle">Trending Now</h2>
            <div class="btn_custom mb-2 ">
                <a class=" rounded shop_more_btn" href="{{route('products.individual.group', ['slug'=>'traending-now'])}}">Shop More
                    <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                    <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                    </svg>
                </a>
            </div>
        </div> 
        {{-- <div class="section__heading mb-2 border-bottom d-flex d-none">
            <h2 class="section__heading-- style2 flex-grow-1">Trending Now</h2>
            <div class="btn_custom mb-2">
                <a class=" rounded shop_more_btn" href="{{route('products.individual.group', ['slug'=>'traending-now'])}}">Shop More
                    <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                    <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                    </svg>
                </a>
            </div>
        </div> --}}
        <div class="product__section--inner">
            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n30">
                @foreach($trending_products as $product)
                    @include('user.partials.product')
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
<div id="featured_products"></div>

<div id="best_selling_products"></div>
{{-- featured brands section --}}


@if(count($blogs) > 0)
<section class="blog__section d-none section--padding pt-0">
    <div class="container-fluid">
        <div class="section__heading text-center mb-50">
            <h2 title="Get your desired product from Trending Now" class="section__heading--maintitle">Latest News</h2>
            <div class="btn_custom mb-2 ">
                <a class=" rounded shop_more_btn" href="{{route('user.blog')}}">View All
                    <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                    <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                    </svg>
                </a>
            </div>
        </div> 

        {{-- <div class="section__heading mb-2 border-bottom d-flex d-none">
            <h2 class="section__heading-- style2 flex-grow-1">Latest News</h2>
            <div class="btn_custom mb-2">
                <a class=" rounded shop_more_btn" href="{{route('user.blog')}}">View All
                    <svg class="primary__btn--arrow__icon" xmlns="http://www.w3.org/2000/svg" width="20.2" height="12.2" viewBox="0 0 6.2 6.2">
                    <path d="M7.1,4l-.546.546L8.716,6.713H4v.775H8.716L6.554,9.654,7.1,10.2,9.233,8.067,10.2,7.1Z" transform="translate(-4 -4)" fill="currentColor"></path>
                    </svg>
                </a>
            </div>
        </div> --}}
        <div class="swiper-wrapper row">
            @foreach($blogs as $blog)
            <div class="swiper-slide col-md-3 swiper-slide-duplicate product_col py-3">
                <div class="blog__items">
                    <div class="blog__thumbnail">
                        <a class="blog__thumbnail--link" href="{{ route('user.blog.details', [$blog->id, Str::slug($blog->title)]) }}"><img class="blog__thumbnail--img" src="{{asset('images/blog/'.optional($blog)->image)}}" alt="{{optional($blog)->title}}"></a>
                    </div>
                    <div class="blog__content">
                        <span class="blog__content--meta">{{date("M d, Y", strtotime(optional($blog)->created_at))}}</span>
                        <h3 class="blog__content--title"><a href="{{ route('user.blog.details', [$blog->id, Str::slug($blog->title)]) }}">{{optional($blog)->title}}</a></h3>
                        <div class="text-center">
                            <a class="blog__content--btn  rounded shop_more_btn" href="{{ route('user.blog.details', [$blog->id, Str::slug($blog->title)]) }}">Read more </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $( window ).on('load', function () {
        //featured_products();
        best_selling_products();
        //flash_sale_offer();
    });
</script>
@endsection

