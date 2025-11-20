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
            /* display: flex;
                        align-items: center; */
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

        /* ===========================
                   DASHBOARD-PRO FILES
                   =========================== */

        .dashpro-card.dashpro-form-card {
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.08);
            background: #fff;
        }

        .dashpro-card-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #222;
        }

        .dashpro-form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .dashpro-form-group {
            display: flex;
            flex-direction: column;
        }

        .dashpro-form-group.full-width {
            grid-column: span 2;
        }

        .dashpro-form-group label {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .dashpro-input {
            padding: 10px 12px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .dashpro-input:focus {
            border-color: #3f51b5;
            box-shadow: 0 0 0 2px rgba(63, 81, 181, 0.15);
            outline: none;
        }

        .dashpro-btn.primary-btn {
            margin-top: 20px;
            padding: 12px 20px;
            background: #3f51b5;
            color: #fff;
            font-weight: 600;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dashpro-btn.primary-btn:hover {
            background: #3340a3;
        }

        .dashpro-profile-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 12px;
            border: 2px solid #eef3ff;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .dashpro-inner {
                flex-direction: column;
                padding: 20px;
            }

            .dashpro-form-grid {
                grid-template-columns: 1fr;
            }

            .dashpro-form-group.full-width {
                grid-column: span 1;
            }
        }

        /* ----------------------------
               DASHBOARD & PROFILE RESPONSIVE FIX
            ----------------------------- */

        /* Adjust grid for small screens */
        @media (max-width: 768px) {
            .dashpro-inner {
                flex-direction: column;
                padding: 20px;
                gap: 20px;
            }

            .dashpro-cards {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .dashpro-form-grid {
                grid-template-columns: 1fr !important;
                gap: 15px;
            }

            .dashpro-form-group.full-width {
                grid-column: span 1 !important;
            }

            .dashpro-card-title {
                font-size: 20px;
                margin-bottom: 18px;
                text-align: left;
            }

            .dashpro-input {
                width: 100%;
            }
        }

        /* Adjust typography for small screens */
        @media (max-width: 576px) {
            .dashpro-title {
                font-size: 24px;
                margin-bottom: 20px;
                text-align: center;
            }

            .dashpro-value {
                font-size: 24px;
            }

            .dashpro-text {
                font-size: 13px;
            }

            .dashpro-btn.primary-btn {
                padding: 10px 15px;
                font-size: 14px;
            }
        }

        /* Force flex container to column for password form */
        .dashpro-form-grid.dashpro-column {
            display: flex;
            flex-direction: column;
            gap: 15px;
            /* spacing between fields */
        }

        .dashpro-form-grid.dashpro-column .dashpro-form-group {
            width: 100%;
        }
    </style>


    <section class="dashpro-section">
        <div class="dashpro-container">

            <div class="dashpro-inner">
                @include('global.inc.usersidebar')

                <div class="dashpro-right">

                    <!-- Account Details Card -->
                    <div class="dashpro-card dashpro-form-card">
                        <h2 class="dashpro-card-title text-danger">Account Details</h2>
                        <form action="{{ route('customer.account.update', Auth::id()) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="dashpro-form-grid">

                                <div class="dashpro-form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" id="name" name="name" value="{{ Auth::user()->name }}"
                                        class="dashpro-input">
                                </div>

                                <div class="dashpro-form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" readonly id="phone" name="phone"
                                        value="{{ Auth::user()->phone }}" class="dashpro-input">
                                </div>

                                <div class="dashpro-form-group full-width">
                                    <label for="email_1">Email address</label>
                                    <input type="email" readonly id="email_1" name="email"
                                        value="{{ Auth::user()->email }}" class="dashpro-input">
                                </div>

                                <div class="dashpro-form-group">
                                    <label for="image">Image</label>
                                    <input type="file" id="image" name="image" class="dashpro-input">
                                    @if (Auth::user()->image)
                                        <img src="{{ asset('images/customer/' . Auth::user()->image) }}"
                                            class="dashpro-profile-img mt-2">
                                    @endif
                                </div>

                                <div class="dashpro-form-group full-width">
                                    <label for="display-name">Address *</label>
                                    <input type="text" id="display-name" name="address"
                                        value="{{ Auth::user()->address }}" class="dashpro-input">
                                </div>

                            </div>

                            <button type="submit" class="dashpro-btn primary-btn">Save Changes</button>
                        </form>
                    </div>

                    <!-- Password Change Card -->
                    <div class="dashpro-card dashpro-form-card mt-4">
                        <h2 class="dashpro-card-title text-danger">Change Password</h2>
                        <form action="{{ route('customer.password.change') }}" method="post">
                            @csrf
                            <div class="dashpro-form-grid dashpro-column">
                                <div class="dashpro-form-group">
                                    <label for="cur-password">Current Password *</label>
                                    <input type="password" id="cur-password" name="c_password" required
                                        class="dashpro-input">
                                </div>

                                <div class="dashpro-form-group">
                                    <label for="new-password">New Password *</label>
                                    <input type="password" id="new-password" name="n_password" required
                                        class="dashpro-input">
                                </div>

                                <div class="dashpro-form-group">
                                    <label for="conf-password">Confirm Password *</label>
                                    <input type="password" id="conf-password" name="cf_password" required
                                        class="dashpro-input">
                                </div>
                            </div>


                            <button type="submit" class="dashpro-btn primary-btn">Save Changes</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>





    @include('global.inc.footer')
@endsection
