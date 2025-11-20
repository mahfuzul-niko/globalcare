@php
    $variation_info = ''; // keep original variation logic
@endphp

<style>
    body {
        font-family: Arial, sans-serif;
        color: #333;
    }

    .myaccount-section {
        padding: 20px;
    }

    .myaccount-inner {
        max-width: 1000px;
        margin: 0 auto;
        padding: 15px;
        border-radius: 5px;
        background: #fff;
    }

    .myaccount-row {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 10px;
    }

    .myaccount-col {
        padding: 5px;
    }

    .myaccount-col-4 { width: 33.333%; }
    .myaccount-col-8 { width: 66.666%; }
    .myaccount-col-12 { width: 100%; }

    .myaccount-title {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .myaccount-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 10px;
    }

    .myaccount-table th,
    .myaccount-table td {
        text-align: left;
        padding: 5px;
        border-bottom: 1px solid #eee;
        font-size: 12px;
    }

    .myaccount-table th {
        background: #f9f9f9;
        font-weight: bold;
    }

    .myaccount-table td img {
        width: 40px;
        height: 40px;
        border-radius: 3px;
        object-fit: cover;
        margin-right: 5px;
    }

    .product-info {
        display: flex;
        align-items: center;
    }

    .summary-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 12px;
    }

    .summary-table td {
        padding: 4px 0;
    }

    .summary-table .title { font-weight: bold; }
    .summary-table .amount { text-align: right; }

    @media (max-width: 767px) {
        .myaccount-col-4, .myaccount-col-8 { width: 100%; }
    }

    @media print {
        body { font-size: 11px; }
        .myaccount-table td img { width: 30px; height: 30px; }
    }
</style>

<section class="myaccount-section" id="printArea">
    <div class="myaccount-inner">

        <!-- Header -->
        <div class="myaccount-row">
            <div class="myaccount-col myaccount-col-12">
                <h2 class="myaccount-title">Order Info</h2>
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
            <div class="myaccount-col myaccount-col-4" style="text-align:right;">
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
                            <th>Qty</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->order_product as $product)
                        <tr>
                            <td>
                                <div class="product-info">
                                    <img src="{{ asset('images/product/' . optional($product->product)->thumbnail_image) }}" alt="product">
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
                            <td class="amount">৳{{ number_format(optional($order)->coupon_discount_amount, 2) }}</td>
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
    window.onload = function() {
        window.print();
    };
</script>
