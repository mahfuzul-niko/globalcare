  @php
      $variation_info = ''; // keep original variation logic
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
        
          /* --- General Reset & Styling --- */
          .myaccount-section {
              padding: 40px 0;
              font-family: Arial, sans-serif;
              color: #333;
          }

          .myaccount-inner {
              max-width: 1200px;
              margin: 0 auto;
              border-radius: 10px;
              background: #fff;
              padding: 20px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
          }

          .myaccount-row {
              display: flex;
              flex-wrap: wrap;
              margin-bottom: 20px;
          }

          .myaccount-col {
              padding: 10px;
          }

          .myaccount-col-4 {
              width: 33.333%;
          }

          .myaccount-col-6 {
              width: 50%;
          }

          .myaccount-col-8 {
              width: 66.666%;
          }

          .myaccount-col-12 {
              width: 100%;
          }

          .myaccount-title {
              font-size: 1.5rem;
              margin-bottom: 20px;
          }

          .myaccount-btn {
              display: inline-flex;
              align-items: center;
              padding: 10px 15px;
              font-size: 1rem;
              border: 1px solid #007bff;
              color: #007bff;
              background: #fff;
              border-radius: 5px;
              cursor: pointer;
              transition: all 0.3s;
          }

          .myaccount-btn svg {
              margin-right: 5px;
          }

          .myaccount-btn:hover {
              background: #007bff;
              color: #fff;
          }

          @media (min-width: 768px) {
              #order-info-right {
                  text-align: right;
              }
          }

          /* --- Table Styles --- */
          .myaccount-table {
              width: 100%;
              border-collapse: collapse;
              margin-bottom: 20px;
          }

          .myaccount-table th,
          .myaccount-table td {
              text-align: left;
              padding: 10px;
              border-bottom: 1px solid #eee;
          }

          .myaccount-table th {
              background: #f9f9f9;
              font-weight: bold;
          }

          .myaccount-table td img {
              width: 60px;
              height: 60px;
              border-radius: 5px;
              object-fit: cover;
              margin-right: 10px;
          }

          .myaccount-table .product-info {
              display: flex;
              align-items: center;
          }

          /* --- Summary Table --- */
          .summary-table {
              width: 100%;
              border-collapse: collapse;
          }

          .summary-table td {
              padding: 8px 0;
          }

          .summary-table .title {
              font-weight: bold;
          }

          .summary-table .amount {
              text-align: right;
          }

          /* --- Responsive --- */
          @media (max-width: 767px) {

              .myaccount-col-4,
              .myaccount-col-6,
              .myaccount-col-8 {
                  width: 100%;
              }
          }

          @media print {
              .myaccount-table td img {
                  width: 10px !important;
                  height: 10px !important;
                  object-fit: cover;
              }

              /* Optional: reduce font size for print */
              body {
                  font-size: 12px;
              }
          }
      </style>

      <section class="myaccount-section" id="printArea">
          <div class="myaccount-inner">
              <!-- Header Row -->
              <div class="myaccount-row">
                  <div class="myaccount-col myaccount-col-4">
                      <h2 class="myaccount-title">Orders Info</h2>
                  </div>
                  <div class="myaccount-col myaccount-col-6"></div>
                  <div class="myaccount-col myaccount-col-2">
                      <a href="{{ route('order.print',$order->id) }}" class="myaccount-btn" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="6 9 6 2 18 2 18 9"></polyline>
                              <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                              <rect x="6" y="14" width="12" height="8"></rect>
                          </svg>
                          Print
                      </a>
                  </div>
              </div>

              <!-- Billing & Order Info -->
              <div class="myaccount-row">
                  <div class="myaccount-col myaccount-col-8">
                      <p><b>Bill To:</b><br>
                          Name: {{ optional($order)->name }}<br>
                          Phone: {{ optional($order)->phone }}<br>
                          Email: {{ optional($order)->email }}</p>
                  </div>
                  <div class="myaccount-col myaccount-col-4" id="order-info-right">
                      <p>
                          <b>Order Code:</b> {{ optional($order)->code }}<br>
                          <b>Date:</b> {{ date('d M, Y', strtotime(optional($order)->created_at)) }}<br>
                          <b>Status:</b> {{ optional($order)->order_status }}
                      </p>
                  </div>
              </div>

              <!-- Products Table -->
              <div class="myaccount-row">
                  <div class="myaccount-col myaccount-col-12">
                      <table class="myaccount-table">
                          <thead>
                              <tr>
                                  <th>Product</th>
                                  <th>Price</th>
                                  <th>Quantity</th>
                                  <th>Total</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($order->order_product as $product)
                                  <tr>
                                      <td>
                                          <div class="product-info">
                                              <img src="{{ asset('images/product/' . optional($product->product)->thumbnail_image) }}"
                                                  alt="product">
                                              <div>
                                                  <div>{{ optional($product->product)->title }}</div>
                                                  <small>{!! $variation_info !!}</small>
                                              </div>
                                          </div>
                                      </td>
                                      <td>৳{{ number_format(optional($product)->price, 2) }}</td>
                                      <td>{{ optional($product)->qty }} {{ optional($product->product)->unit_type }}</td>
                                      <td>৳{{ number_format(optional($product)->total, 2) }}</td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>

              <!-- Summary Table -->
              <div class="myaccount-row">
                  <div class="myaccount-col myaccount-col-4"></div>
                  <div class="myaccount-col myaccount-col-8">
                      <table class="summary-table">
                          <tbody>
                              <tr>
                                  <td class="title">Subtotal</td>
                                  <td class="amount">৳{{ number_format(optional($order)->price, 2) }}</td>
                              </tr>
                              @if ($order->coupon_discount_amount > 0)
                                  <tr>
                                      <td class="title">Discount</td>
                                      <td class="amount">৳{{ number_format(optional($order)->coupon_discount_amount, 2) }}
                                      </td>
                                  </tr>
                              @endif
                              <tr>
                                  <td class="title">Shipping</td>
                                  <td class="amount">৳{{ number_format(optional($order)->delivery_charge, 2) }}</td>
                              </tr>
                              <tr>
                                  <td class="title">Total</td>
                                  <td class="amount">৳{{ number_format(optional($order)->total_payable, 2) }}</td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
              </div>

              <!-- Address & Note -->
              <div class="myaccount-row">
                  <div class="myaccount-col myaccount-col-12">
                      <p>
                          <b>District:</b> {{ optional($order->district_info)->name }}<br>
                          <b>Area:</b> {{ optional($order->district_area_info)->name }}<br>
                          <b>Shipping Address:</b> {{ optional($order)->shipping_address }}<br>
                          <b>Note:</b> {{ optional($order)->note }}
                      </p>
                  </div>
              </div>
          </div>
      </section>

      <script>
          function printSpecialArea() {
              document.getElementById('printButton').style.display = 'none';
              var printContent = document.getElementById("printArea").innerHTML;
              var originalContent = document.body.innerHTML;
              document.body.innerHTML = printContent;
              window.print();
              document.body.innerHTML = originalContent;
              document.getElementById('printButton').style.display = 'inline-flex';
          }
      </script>


      @include('global.inc.footer')
  @endsection
