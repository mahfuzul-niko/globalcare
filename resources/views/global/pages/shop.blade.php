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
    <!-- Featured Products  -->
    <div class="categorySlider product-list-wrapper">
        <div class="product-list-title">
            <div>
                <h2>{{ $category_title  }}</h2>
            </div>
        </div>

        <div class="product-list mt-14">
            <div>

                @if ($products->count() > 0)
                    <div class="w-full grid grid-cols-2 md:grid-cols-4 gap-4 ">
                        @foreach ($products as $product)
                            @include('global.inc.card-product', ['product' => $product])
                        @endforeach
                    </div>
                @else
                    <div class="w-full h-60 flex items-center justify-center text-gray-500 text-lg ">
                        No product found
                    </div>
                @endif

            </div>
        </div>
    </div>

    @include('global.inc.footer')
@endsection
