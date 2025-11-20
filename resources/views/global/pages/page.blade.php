@extends('global.inc.master')
@php($business_info = business_info())

@section('title')
    Privacy Policy
@endsection
@section('description')
    {{ optional($business_info)->meta_description }}
@endsection
@section('keywords')
    {{ optional($business_info)->meta_keywords }}
@endsection
@section('layout')
    <!-- Top Header -->
    @include('global.inc.top-nav')
    <!-- Side Bar -->
    @include('global.inc.side-bar')
@endsection
@section('content')
    <style>
        /* Container for the page */
        .policy-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            line-height: 1.7;
        }

        /* Main title */
        .policy-container h1 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
            text-align: center;
            color: #1f2937;
        }

        /* Section titles */
        .policy-container h2 {
            font-size: 24px;
            margin-top: 30px;
            margin-bottom: 15px;
            color: #111827;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 5px;
        }

        /* Paragraphs */
        .policy-container p {
            font-size: 16px;
            margin-bottom: 15px;
            color: #4b5563;
        }

        /* Lists */
        .policy-container ul {
            margin-left: 20px;
            margin-bottom: 15px;
        }

        .policy-container ul li {
            margin-bottom: 10px;
        }
    </style>

    <div class="policy-container">
        <h1>{{ $page_info->name }}</h1>

        {!! $page_info->description !!}

    </div>


    @include('global.inc.footer')
@endsection
