@extends('global.inc.master')
@section('layout')
    <!-- Top Header -->
    @include('global.inc.header')
    <!-- Top Nav -->
    @include('global.inc.top-nav')
    <!-- side bar -->
    @include('global.inc.side-bar')
@endsection
@section('content')
    <!-- Banner Section -->
    @include('global.inc.banner')
    <!-- special offers -->
    @include('global.inc.special-offers')
    <!-- Category Section -->
    @include('global.inc.categories')
@endsection
