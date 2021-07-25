@extends('layouts.appShop')
@section('section')
    <!-- Search Wrapper Area Start -->
    @include('partial.products1')
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->


        <!-- Header Area Start -->
        
        @include('partial.header')
            <div class="cart-table-area mt-5">
                <div class="row">
                    <h3 class="mt-1"> Laravel Ecommerce Full Crud On Products </h3>
                    <div class="col-md-6">
                        <ul>
                            <li>Buying Products</li>
                            <li>Adding products to Cart </li>
                            <li>Adding Products to favorite</li>
                            <li>Add New Products to store</li>
                            <li>See All Products Table</li>
                            <li>How Checkout Works</li>
                            <li>Checkout</li>
                            <li>Stripe Payment</li>
                        </ul>
                    </div>
                </div>
        
        </div>
    </div>
    