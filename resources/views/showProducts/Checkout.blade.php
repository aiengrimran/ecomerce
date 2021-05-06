@extends('layouts.appShop')
@section('customCss')

<link rel="stylesheet" href="{{ asset('css/core-style.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('navBar')
    <!-- Search Wrapper Area Start -->
    @include('partial.products1')
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
       @include('partial.header')
        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div  id="app">
                    <checkout subtotal="{{$subTotal}}" total={{ $cartTotal}}></checkout>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->
    @include('partial.footer')
    <script src="{{asset('js/app.js')}}"></script>
@endsection