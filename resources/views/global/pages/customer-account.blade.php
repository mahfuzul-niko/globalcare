@php
    $wishlist_count = 0;
    $orders = 0;

    if (Auth::check()) {
        $wishlists = App\Models\Wishlist::where('customer_id', Auth::id())->count('id');
        $wishlist_count = $wishlists;

        $orders = App\Models\Order::where('customer_id', Auth::id())->count('id');
    }

@endphp

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
    <style>
        /* ===========================
       PREMIUM DASHBOARD DESIGN
       =========================== */

        .dashpro-section {
            padding: 50px 0;
            background: #f4f6f9;
        }

        .dashpro-container {
            padding: 0 25px;
        }

        .dashpro-inner {
            display: flex;
            gap: 35px;
            padding: 30px;
        }

        /* Right side dashboard */
        .dashpro-right {
            flex: 1;
        }

        .dashpro-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #222;
        }

        /* Cards */
        .dashpro-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 25px;
        }

        .dashpro-card {
            display: flex;
            align-items: center;
            gap: 18px;
            padding: 22px;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.08);
            transition: all .3s ease;
            cursor: pointer;
        }

        .dashpro-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.12);
        }

        /* Icon styling */
        .dashpro-icon {
            width: 55px;
            height: 55px;
            background: #eef3ff;
            color: #3f51b5;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 14px;
            font-size: 22px;
        }

        .dashpro-value {
            font-size: 28px;
            font-weight: 700;
            margin: 0;
            color: #222;
        }

        .dashpro-text {
            font-size: 15px;
            color: #555;
            margin: 2px 0 0;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .dashpro-inner {
                flex-direction: column;
                padding: 20px;
            }
        }
    </style>
    

<section class="dashpro-section">
    <div class="dashpro-container">

        <div class="dashpro-inner">
            @include('global.inc.usersidebar')

            <div class="dashpro-right">
                <h2 class="dashpro-title">My Dashboard</h2>

                <div class="dashpro-cards">

                    

                    

                    <div class="dashpro-card">
                        <div class="dashpro-icon">
                            <i class="fas fa-shopping-bag"></i>
                        </div>
                        <div>
                            <h3 class="dashpro-value">{{ $orders }}</h3>
                            <p class="dashpro-text">Orders</p>
                        </div>
                    </div>

                    <div class="dashpro-card">
                        <div class="dashpro-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div>
                            <h3 class="dashpro-value">{{ $wishlist_count }}</h3>
                            <p class="dashpro-text">Wishlist</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>





    @include('global.inc.footer')
@endsection
