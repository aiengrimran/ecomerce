@extends('layouts.appShop')
@section('customCss')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/core-style.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@section('section')

@section('navBar')
    @if (session('itemAddedToCart'))
        <div class="alert alert-succsess bg-dark">
            <h3 class="text-center bg-info">Item Added To Cart</h3>
        </div>
    @endif




    <!-- Search Wrapper Area Start -->
    @include('partial.products1')
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->


        <!-- Header Area Start -->
        @include('partial.header')
        <!-- Header Area End -->

        @include('partial.sidebar2')
        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">
                @include('partial.ProductFilter')
                <div class="row mt-4">
                    @foreach ($chairs as $chair)
                        <!-- Single Product Area -->
                        <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{ $chair->image }}" alt="">
                                    <!-- Hover Thumb -->
                                    <img class="hover-img" src="{{ asset('storage/img/product-img/product2.jpg') }}" alt="">
                                </div>

                                <!-- Product Description -->
                                <div class="product-description d-flex align-items-center justify-content-between">
                                    <!-- Product Meta Data -->
                                    <div class="product-meta-data">
                                        <div class="line"></div>
                                        <p class="product-price">${{ $chair->price }}</p>
                                        <a href="product-details.html">
                                            <h6>Modern Chair</h6>
                                        </a>
                                    </div>
                                    <!-- Ratings & Cart -->
                                    <div class="ratings-cart text-right">
                                        <div class="ratings">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <div class="cart">
                                            <a href="addToCart/{{ $chair->id }}" data-toggle="tooltip"
                                                data-placement="left" title="Add to Cart"><img
                                                    src="{{ asset('storage/img/core-img/cart.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                <li class="page-item"><a class="page-link" href="#">03.</a></li>
                                <li class="page-item"><a class="page-link" href="#">04.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    @include('partial.footer')


@endsection
@section('customjs')




@endsection
