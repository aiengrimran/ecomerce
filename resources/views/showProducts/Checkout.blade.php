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
                <div  id="app" class="row">
                    <formm></formm>

                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>subtotal:</span> <span>$ {{$subTotal}}</span></li>
                                <li><span>delivery:</span> <span>Free</span></li>
                                <li><span>total:</span> <span>$ {{ $cartTotal}}</span></li>
                            </ul>

                            <div class="payment-method">
                                <!-- Cash on delivery -->
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="cod" checked>
                                    <label class="custom-control-label" for="cod">Cash on Delivery</label>
                                </div>
                                <!-- Paypal -->
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="paypal">
                                    <label class="custom-control-label" for="paypal">Paypal <img class="ml-15" src="{{asset('storage/img/core-img/paypal.png')}}" alt=""></label>
                                </div>
                            </div>
                            <div class="cart-btn mt-100">
                                <a href="{{url('/checkoutStripe')}}" class="btn amado-btn w-100">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->
    @include('partial.footer')
    <script src="{{asset('js/app.js')}}"></script>
@endsection