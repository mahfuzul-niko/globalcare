@php
    $total = Cart::subtotal();
    $discount = 0;
    if (Session::has('coupon_discount')) {
        $discount = Session::get('coupon_discount');
    }

    $total_with_discount = $total - $discount;
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
        /* -------- LAYOUT -------- */
        .chk-container {
            width: 95%;
            max-width: 1500px;
            margin: auto;
        }

        .chk-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .chk-col-5 {
            width: 100%;
        }

        .chk-col-7 {
            width: 100%;
        }

        @media(min-width: 992px) {
            .chk-col-5 {
                width: 35%;
            }

            .chk-col-7 {
                width: 62%;
            }
        }

        .chk-shadow-box {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .chk-sticky {
            position: sticky;
            top: 20px;
        }

        /* -------- TYPOGRAPHY -------- */
        .chk-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .chk-label {
            font-weight: 600;
        }

        /* -------- CART TABLE -------- */
        .chk-cart-item {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            border-bottom: 1px solid #f1f1f1;
            padding-bottom: 15px;
        }

        .chk-cart-img {
            width: 80px;
            border-radius: 6px;
            border: 1px solid #ddd;
            padding: 3px;
        }

        .chk-qty-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: #ff5050;
            color: white;
            font-size: 12px;
            padding: 3px 6px;
            border-radius: 20px;
        }

        /* -------- FORM FIELDS -------- */
        .chk-input,
        .chk-select,
        .chk-textarea {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        .chk-textarea {
            height: 120px;
        }

        .chk-btn {
            background: #EE2761;
            color: white;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
            border: none;
            font-weight: 600;
            transition: 0.2s;
            width: 100%;
        }

        .chk-btn:hover {
            background: #d02054;
        }

        .chk-link {
            color: #EE2761;
            font-weight: 600;
            margin-left: 15px;
        }

        /* -------- RADIO IMAGE -------- */
        .chk-radio-img input[type=radio] {
            display: none;
        }

        .chk-radio-img img {
            width: 100px;
            cursor: pointer;
            border-radius: 10px;
            padding: 10px;
            border: 2px solid transparent;
            transition: 0.2s;
        }

        .chk-radio-img input[type=radio]:checked+img {
            border: 3px solid #0ABB75;
        }

        .chk-flex {
            display: flex;
            gap: 15px;
        }

        /* -------- TOTAL TABLE -------- */
        .chk-total-table td {
            padding: 10px 0;
            font-size: 16px;
        }

        .chk-total-title {
            font-weight: bold;
        }

        .coupon-msg {
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 12px;
            font-size: 15px;
        }

        .coupon-success {
            background: #e9f9ec;
            border: 1px solid #b6e6c0;
            color: #2e7d32;
        }

        .coupon-error {
            background: #fdeaea;
            border: 1px solid #f5b5b5;
            color: #c62828;
        }

        .coupon-box {
            background: #f7f7f7;
            padding: 15px;
            border-radius: 10px;
            border: 1px solid #ddd;
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .coupon-remove-btn {
            background: white;
            border: 1px solid #c62828;
            color: #c62828;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 13px;
            cursor: pointer;
            transition: 0.2s ease-in-out;
            text-decoration: none;
        }

        .coupon-remove-btn:hover {
            background: #c62828;
            color: white;
        }
    </style>
    <div class="chk-container py-5">
        <div class="chk-row">

            <!-- LEFT -->
            <div class="chk-col-5">
                <div class="chk-shadow-box chk-sticky">

                    <h3 class="chk-title">Order Summary</h3>

                    @foreach ($carts as $cart)
                        <?php $product = App\Models\Product::find(optional($cart->options)->product_id); ?>
                        @if ($product)
                            <div class="chk-cart-item">
                                <div style="position: relative;">
                                    <img class="chk-cart-img"
                                        src="{{ asset('images/product/' . $product->thumbnail_image) }}">
                                    <span class="chk-qty-badge">{{ $cart->qty }}</span>
                                </div>
                                <div>
                                    <strong>{{ $product->title }}</strong><br>
                                    <span>৳{{ number_format(optional($cart->options)->single_price * $cart->qty, 2) }}</span>
                                </div>
                            </div>
                        @endif
                    @endforeach

                    <h3 class="chk-title">Coupon</h3>
                    <form method="POST" action="{{ route('coupon.apply') }}">
                        @csrf
                        <input class="chk-input" type="text" name="code" placeholder="Enter coupon code">
                        <button class="chk-btn">Apply Coupon</button>
                    </form>
                    <div style="margin-top : 12px">

                        @if (Session::has('coupon_success'))
                            <div class="coupon-msg coupon-success">
                                {{ Session::get('coupon_success') }}
                            </div>
                        @endif

                        @if (Session::has('invalid'))
                            <div class="coupon-msg coupon-error">
                                {{ Session::get('invalid') }}
                            </div>
                        @endif

                        @if (Session::has('coupon_discount'))
                            <div class="coupon-box">
                                <div>
                                    <strong>Coupon Applied</strong><br>
                                    <span style="font-size: 14px; color: #2e7d32;">
                                        Discount successfully added.
                                    </span>
                                </div>

                                <a href="{{ route('coupon.remove') }}" class="coupon-remove-btn">
                                    Remove
                                </a>
                            </div>
                        @endif

                    </div>

                </div>
            </div>

            <!-- RIGHT -->
            <div class="chk-col-7">
                <form method="POST" action="{{ route('order.create') }}" class="chk-shadow-box">
                    @csrf

                    <h3 class="chk-title">Billing Details</h3>
                    <div class="col-md-6">
                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>

                    <label class="chk-label">Name *</label>
                    <input class="chk-input" type="text" name="name"
                        value="{{ auth()->check() ? auth()->user()->name : old('name') }}">

                    <label class="chk-label">Phone *</label>
                    <input class="chk-input" type="text" name="phone"
                        value="{{ auth()->check() ? auth()->user()->phone : old('phone') }}">

                    <label class="chk-label">Email</label>
                    <input class="chk-input" type="email" name="email"
                        value="{{ auth()->check() ? auth()->user()->email : old('email') }}">


                    <label class="chk-label">Shipping Area *</label>
                    <select class="chk-select" name="district_id" id="district_id" required>
                        <option value="">Choose Area</option>
                        @foreach ($districts as $district)
                            <option value="{{ $district->id }}" data-charge="{{ $district->shipping_charge }}">
                                {{ $district->name }}
                            </option>
                        @endforeach
                    </select>

                    <label class="chk-label">Address *</label>
                    <textarea class="chk-textarea" name="shipping_address"></textarea>

                    <!-- Total Table -->
                    <table class="chk-total-table" width="100%">
                        <tr>
                            <td class="chk-total-title">Subtotal</td>
                            <td>{{ number_format($total, 2) }}</td>
                        </tr>
                        <tr>
                            <td class="chk-total-title">Discount</td>
                            <td>{{ number_format($discount, 2) }}</td>
                        </tr>
                        <tr>
                            <td class="chk-total-title">Shipping</td>
                            <td id="shipping_charge_label">0.00</td>
                        </tr>
                        <tr>
                            <td class="chk-total-title">Total</td>
                            <td id="total_show">{{ number_format($total_with_discount, 2) }}</td>
                        </tr>
                    </table>

                    <h3 class="chk-title">Payment</h3>

                    <div class="chk-flex">
                        <label class="chk-radio-img">
                            <input type="radio" name="payment_type" value="cod" checked>
                            <img src="{{ asset('assets/images/cod.png') }}">
                        </label>

                        @if (env('BKASH'))
                            <label class="chk-radio-img">
                                <input type="radio" name="payment_type" value="bkash">
                                <img src="{{ asset('assets/images/bkash-logo.png') }}">
                            </label>
                        @endif
                    </div>

                    <br>

                    <label><input type="checkbox" required> I agree to Terms</label>

                    <br><br>

                    <button class="chk-btn">Confirm Order</button>
                </form>
            </div>

        </div>
    </div>
    <script>
        $(document).on('change', '#district_id', function() {
            let charge = $('option:selected', this).data('charge');

            if (!charge) charge = 0;

            // Set shipping charge
            $('#shipping_charge_label').text(parseFloat(charge).toFixed(2));

            // Get subtotal & discount from backend values
            let subtotal = parseFloat({{ $total }});
            let discount = parseFloat({{ $discount }});

            // Calculate total
            let total = (subtotal - discount) + parseFloat(charge);

            // Show total
            $('#total_show').text(total.toFixed(2));
        });
    </script>

@endsection
