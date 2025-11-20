   @php
       $total = Cart::subtotal();
       $discount = 0;
       if (Session::has('coupon_discount')) {
           $discount = Session::get('coupon_discount');
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
           /* Layout */
           .container {
               width: 100%;
               max-width: 1300px;
               margin: auto;
               padding: 0 15px;
           }

           .grid-2 {
               display: grid;
               grid-template-columns: 2fr 1fr;
               gap: 30px;
           }

           .flex {
               display: flex;
               /* align-items: center; */
           }

           .space-between {
               display: flex;
               justify-content: space-between;
           }

           .text-center {
               text-align: center;
           }

           .text-right {
               text-align: right;
           }

           .py-5 {
               padding: 40px 0;
           }

           .mb-40 {
               margin-bottom: 40px;
           }

           .mb-30 {
               margin-bottom: 30px;
           }

           .mt-20 {
               margin-top: 20px;
           }

           /* Table */
           .cart-table-inner {
               width: 100%;
               border-collapse: collapse;
           }

           .cart-table-inner th,
           .cart-table-inner td {
               padding: 12px 10px;
               border-bottom: 1px solid #e5e5e5;
           }

           .cart-item {
               border-bottom: 1px solid #ddd;
           }

           /* Product row */
           .cart-product {
               gap: 10px;
           }

           .cart-remove-btn {
               background: none;
               border: none;
               font-size: 18px;
               cursor: pointer;
           }

           .thumb-img {
               width: 70px;
               height: 70px;
               object-fit: cover;
               border-radius: 5px;
           }

           .cart-name {
               font-size: 16px;
               margin: 0 0 5px;
           }

           .cart-variant {
               font-size: 14px;
               color: #555;
           }

           /* Quantity */
           .qty-box {
               display: inline-flex;
               border: 1px solid #ccc;
               border-radius: 5px;
               overflow: hidden;
           }

           .qty-box button {
               width: 30px;
               border: none;
               background: #eee;
               cursor: pointer;
           }

           .qty-box input {
               width: 40px;
               text-align: center;
               border: none;
               padding: 5px;
               background: #fff;
           }

           /* Summary */
           .cart-summary {
               border: 1px solid #ddd;
               padding: 20px;
               border-radius: 10px;
           }

           .summary-table {
               width: 100%;
               border-collapse: collapse;
               margin-bottom: 20px;
           }

           .summary-table td {
               padding: 10px 0;
           }

           /* Coupon */
           .coupon-input {
               width: 150px;
               padding: 8px;
               border: 1px solid #ccc;
               border-radius: 5px;
           }

           /* Buttons */
           .primary-btn,
           .continue-btn,
           .checkout-btn,
           .btn-dark {
               display: inline-block;
               background: #0A74DA;
               color: #fff;
               padding: 10px 18px;
               border-radius: 5px;
               text-decoration: none;
               cursor: pointer;
           }

           .btn-dark {
               background: #111;
           }

           .primary-btn:hover,
           .btn-dark:hover,
           .continue-btn:hover {
               opacity: 0.85;
           }

           /* Alerts */
           .success {
               color: green;
               font-weight: bold;
           }

           .danger {
               color: red;
               font-weight: bold;
           }

           /* Make table horizontally scrollable on small screens */
           .table-responsive {
               width: 100%;
               overflow-x: auto;
               -webkit-overflow-scrolling: touch;
               /* smooth scrolling on iOS */
           }

           .table-responsive table {
               width: 100%;
               min-width: 600px;
               /* optional, to avoid squishing columns */
               border-collapse: collapse;
           }

           @media (max-width: 767px) {

               /* Remove table horizontal overflow */
               .cart-table-inner {
                   width: 100%;
                   display: table;
                   table-layout: fixed;
                   word-wrap: break-word;
               }

               .cart-table-inner th,
               .cart-table-inner td {
                   padding: 10px 6px;
                   white-space: normal !important;
                   /* allow wrapping */
                   text-align: left;
               }

               /* Make the grid single column */
               .grid-2 {
                   grid-template-columns: 1fr;
                   gap: 20px;
               }

               /* Product row layout */
               .cart-product {
                   align-items: flex-start;
                   gap: 8px;
               }

               .thumb-img {
                   width: 55px;
                   height: 55px;
               }

               .cart-name {
                   font-size: 14px;
                   line-height: 1.2;
               }

               .cart-variant {
                   font-size: 12px;
                   line-height: 1.2;
               }

               /* Quantity box adjustment */
               .qty-box button {
                   width: 26px;
                   padding: 6px 0;
               }

               .qty-box input {
                   width: 30px;
                   font-size: 14px;
               }

               /* Make buttons full width on mobile */
               .primary-btn,
               .continue-btn,
               .checkout-btn {
                   width: 100%;
                   text-align: center;
                   display: block;
                   padding: 12px;
                   font-size: 16px;
               }

               .table-responsive {
                   overflow-x: auto;
               }
           }
       </style>
       <section class="cart-section py-5">
           <div class="container">
               <div class="cart-inner">
                   <h2 class="cart-title mb-40">Shopping Cart</h2>

                   <div class="grid-2">
                       <!-- LEFT SIDE: Cart Items -->
                       <div>
                           <div class="cart-table table-responsive">
                               <table class="cart-table-inner">
                                   <thead>
                                       <tr>
                                           <th width="45%">Product</th>
                                           <th>Price</th>
                                           <th>Quantity</th>
                                           <th>Total</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @if (count($carts) > 0)
                                           @foreach ($carts as $cart)
                                               <?php
                                               $product_info = App\Models\Product::find(optional($cart->options)->product_id);
                                               
                                               $variation_info = '';
                                               
                                               if (!is_null($product_info)) {
                                                   if ($cart->weight != 0) {
                                                       $stock_info = App\Models\ProductStocks::find($cart->weight);
                                               
                                                       if ($stock_info->color != null) {
                                                           $color_attribute_info = color_info($stock_info->color);
                                                           $color_info = '<b>Color: </b>' . optional($color_attribute_info)->name . ', ';
                                                       } else {
                                                           $color_info = '';
                                                       }
                                               
                                                       if ($stock_info->variant != null) {
                                                           $variant_attribute_info = variation_info($stock_info->variant);
                                                           $attribute_info = '<b>' . optional($variant_attribute_info)->title . ': </b>' . optional($stock_info)->variant_output;
                                                       } else {
                                                           $attribute_info = '';
                                                       }
                                               
                                                       $variation_info = $color_info . $attribute_info;
                                                   } else {
                                                       $stock_info = $product_info->single_stock;
                                                   }
                                               
                                                   $price_info = '<span class="current-price">৳' . number_format(optional($cart->options)->single_price, 2) . '</span>';
                                               
                                                   if (optional($cart->options)->old_price > 0) {
                                                       $price_info .= ' <span class="old-price">৳' . number_format(optional($cart->options)->old_price, 2) . '</span>';
                                                   }
                                               }
                                               ?>

                                               @if (!is_null($product_info))
                                                   <tr class="cart-item">
                                                       <td>
                                                           <div class="cart-product flex" style="align-items: center;">
                                                               <form action="{{ route('cart.remove') }}" method="POST">
                                                                   @csrf
                                                                   <input type="hidden" name="rowId"
                                                                       value="{{ $cart->rowId }}">
                                                                   <button class="cart-remove-btn"
                                                                       aria-label="Remove">&times;</button>
                                                               </form>

                                                               <div class="cart-thumb">
                                                                   <a
                                                                       href="{{ route('single.product', [$product_info->id, Str::slug($product_info->title)]) }}">
                                                                       <img class="thumb-img"
                                                                           src="{{ asset('images/product/' . optional($product_info)->thumbnail_image) }}">
                                                                   </a>
                                                               </div>

                                                               <div class="cart-content">
                                                                   <h4 class="cart-name">
                                                                       <a
                                                                           href="{{ route('single.product', [$product_info->id, Str::slug($product_info->title)]) }}">
                                                                           {{ $product_info->title }}
                                                                       </a>
                                                                   </h4>
                                                                   <span class="cart-variant">{!! $variation_info !!}</span>
                                                               </div>
                                                           </div>
                                                       </td>

                                                       <td>
                                                           <span class="cart-price">{!! $price_info !!}</span>
                                                       </td>

                                                       <td>
                                                           <div class="qty-box">
                                                               <button
                                                                   onclick="change_cart_qty('down', '{{ $cart->rowId }}', 'cart_page')">-</button>

                                                               <input type="text" readonly
                                                                   class="cart_page_qty_{{ $cart->rowId }}"
                                                                   value="{{ $cart->qty }}">

                                                               <button
                                                                   onclick="change_cart_qty('up', '{{ $cart->rowId }}', 'cart_page')">+</button>
                                                           </div>

                                                       </td>

                                                       <td>
                                                           <span
                                                               class="cart-price">৳{{ number_format(optional($cart->options)->single_price * $cart->qty, 2) }}</span>
                                                       </td>
                                                   </tr>
                                               @endif
                                           @endforeach
                                       @else
                                           <tr>
                                               <td colspan="5" class="text-center py-5">
                                                   <h3><b>Cart is Empty!</b></h3>
                                               </td>
                                           </tr>
                                       @endif
                                   </tbody>
                               </table>

                               <div class="space-between mt-20">
                                   <a href="{{ route('products') }}" class="continue-btn">Continue Shopping</a>
                               </div>
                           </div>
                       </div>

                       <!-- RIGHT SIDE: Summary -->
                       <div>
                           <div class="cart-summary">
                               {{-- <div class="coupon-box mb-30">
                                   <h3>Coupon</h3>
                                   <p>Enter your coupon code if you have one.</p>

                                   <form class="flex" action="{{ route('coupon.apply') }}" method="POST">
                                       @csrf
                                       <input required name="code" placeholder="Coupon code" class="coupon-input">
                                       <button class="primary-btn">Apply Coupon</button>
                                   </form>

                                   @if (Session::has('coupon_success'))
                                       <p class="success">{{ Session::get('coupon_success') }}</p>
                                   @endif
                                   @if (Session::has('invalid'))
                                       <p class="danger">{{ Session::get('invalid') }}</p>
                                   @endif
                                   @if (Session::has('coupon_discount'))
                                       <a href="{{ route('coupon.remove') }}" class="btn-dark">Remove Coupon</a>
                                   @endif
                               </div> --}}
                               <h3>Total Cart Info</h3>
                               <table class="summary-table">
                                   <tr>
                                       <td>Subtotal</td>
                                       <td>{{ number_format($total, 2) }}</td>
                                   </tr>
                                   <tr>
                                       <td>Discount</td>
                                       <td>{{ number_format($discount, 2) }}</td>
                                   </tr>
                                   <tr>
                                       <td>Total</td>
                                       <td>{{ number_format($total - $discount, 2) }}</td>
                                   </tr>
                               </table>

                               <div class="text-right mt-20">
                                   <a href="{{ route('checkout') }}" class="primary-btn checkout-btn">PROCEED TO
                                       CHECKOUT</a>
                               </div>
                           </div>
                       </div>

                   </div>
               </div>
           </div>
       </section>

       @include('global.inc.footer')
   @endsection
