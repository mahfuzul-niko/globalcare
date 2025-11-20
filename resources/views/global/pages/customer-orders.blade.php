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
                       PREMIUM DASHBOARD ORDERS
                       =========================== */
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

        .dashpro-orders-card {
            background: #fff;
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.08);
            transition: .3s ease;
        }

        .dashpro-orders-card:hover {
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.12);
            transform: translateY(-3px);
        }

        .dashpro-orders-title {
            font-size: 24px;
            font-weight: 700;
            color: #222;
            margin-bottom: 25px;
        }

        /* Table Style */
        .dashpro-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 15px;
        }

        .dashpro-table th {
            background: #f4f6f9;
            padding: 12px;
            text-align: left;
            font-weight: 700;
            font-size: 14px;
            color: #333;
        }

        .dashpro-table td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            vertical-align: middle;
        }

        .dashpro-table tr:hover {
            background: #f9fbff;
        }

        /* Actions button */
        .dashpro-btn-sm {
            padding: 6px 10px;
            background: #3f51b5;
            color: #fff;
            border-radius: 8px;
            font-size: 13px;
            text-decoration: none;
            transition: .3s;
        }

        .dashpro-btn-sm:hover {
            background: #2d3e9c;
        }

        /* Responsive */
        @media(max-width: 768px) {
            .dashpro-orders-card {
                padding: 20px;
            }

            .dashpro-table th,
            .dashpro-table td {
                padding: 10px;
                font-size: 13px;
                white-space: nowrap;
            }

            .dashpro-table {
                display: block;
                overflow-x: auto;
                width: 100%;
            }
        }
    </style>


    <section class="dashpro-section">
        <div class="dashpro-container">

            <div class="dashpro-inner">

                @include('global.inc.usersidebar')

                <div class="dashpro-right">
                    <div class="dashpro-orders-card mt-3 mb-3">
                        <h3 class="dashpro-orders-title">My Orders</h3>

                        <table class="dashpro-table">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->code }}</td>
                                        <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d M, Y g:i A') }}</td>
                                        <td>{{ $order->order_status }}</td>
                                        <td>
                                            {{ env('CURRENCY') }}{{ $order->price }} {{ env('UAE_CURRENCY') }}
                                            for {{ $order->order_product->sum('qty') }} item(s)
                                        </td>
                                        <td style="text-align:center;">
                                            <a href="{{ route('order.view', $order->code) }}" class="dashpro-btn-sm">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>


        </div>
    </section>
    @include('global.inc.footer')
@endsection
