@extends('global.inc.master')
@php($business_info = business_info())

@section('title', 'Home')
@section('description', optional($business_info)->meta_description)
@section('keywords', optional($business_info)->meta_keywords)

@section('layout')
    @include('global.inc.top-nav')
    @include('global.inc.side-bar')
@endsection

@section('content')
    <style>
        /* ===========================
           DASHBOARD STYLE (Same as Orders)
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
            flex-wrap: wrap;
        }

        .dashpro-right {
            flex: 1;
        }

        .dashpro-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #222;
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

        .dashpro-product-img {
            width: 80px;
            height: auto;
            border-radius: 8px;
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
                        <h3 class="dashpro-orders-title">My Wishlist</h3>

                        <table class="dashpro-table">
                            <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Product</th>
                                    <th>Image</th>
                                    <th style="text-align:center;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($wishlists as $wishlist)
                                    @if ($wishlist->product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $wishlist->product->title }}</td>
                                            <td>
                                                <img src="{{ asset('images/product/' . $wishlist->product->thumbnail_image) }}"
                                                    class="dashpro-product-img">
                                            </td>
                                            <td style="text-align:center;">
                                                <form action="{{ route('wishlist.remove', $wishlist->id) }}" method="POST"
                                                    class="d-inline-block">
                                                    @csrf
                                                    @if ($wishlist->product->type == 'single')
                                                        <a href="javascript:void(0)"
                                                            onclick="addToCart({{ $wishlist->product->id }})"
                                                            class="dashpro-btn-sm">Add To Cart</a>
                                                    @else
                                                        <a href="{{ route('single.product', [$wishlist->product->id, Str::slug($wishlist->product->title)]) }}"
                                                            class="dashpro-btn-sm">View Product</a>
                                                    @endif
                                                    <button type="submit" class="dashpro-btn-sm"
                                                        style="background:#e53935;">Remove</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">No items in your wishlist.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('global.inc.footer')
@endsection
