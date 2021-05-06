@extends('layouts.appShop')
@section('customCss')

<link rel="stylesheet" href="{{asset('css/core-style.css')}}">    
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@section('section')

    @if (session('cartItemUpdated'))
        <div class="alert alert-success" role="alert">
            <p>cart item updated</p>
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
        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    @if (!session('NototalItmes'))
                        <div class="col-12 col-lg-8">
                            <div class="cart-title mt-50">
                                <h2>Shopping Cart</h2>
                            </div>


                            <div class="cart-table clearfix">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($items ?? ('' ?? '') as $item)
                                            <tr>
                                                <td class="cart_product_img">
                                                    <a href="#"><img src="{{ $item->options->image }}" alt="Product"></a>
                                                </td>
                                                <td class="cart_product_desc">
                                                    <h5>{{ $item->name }}</h5>
                                                </td>
                                                <td class="price">
                                                    <span>${{ $item->price }} </span>
                                                </td>
                                                <td class="qty">
                                                    <div class="qty-btn d-flex">
                                                        <div class="quantity">
                                                            <form action="{{ url('updateCartitem') }}" method="post">
                                                                @csrf
                                                                <input type="hidden" value="{{ $item->rowId }}"
                                                                    name="rowId">
                                                                <span class="qty-minus"
                                                                    onclick="var effect = document.getElementById('qty3'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i
                                                                        class="fa fa-minus" aria-hidden="true"></i></span>
                                                                <input type="number" class="qty-text"
                                                                    value="{{ $item->qty }}" id="qty3" step="1" min="1"
                                                                    max="300" name="quantity" value="1"
                                                                    style="width: 90px;">


                                                                <span class="qty-plus"
                                                                    onclick="var effect = document.getElementById('qty3'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i
                                                                        class="fa fa-plus" aria-hidden="true"></i></span>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Update</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                    <a href="{{ url('deleteCartItem/') }}/{{ $item->rowId }}"
                                                        class="btn btn-danger">Remove</a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="cart-summary">
                                <h5>Cart Total</h5>
                                <ul class="summary-table">
                                    <li><span>subtotal:</span> <span>$ {{ $subtotal}}</span></li>
                                    <li><span>Tax:</span> <span>  {{$tax}}</span></li>
                                    <li><span>total:</span> <span>$ {{ $total }}</span></li>
                                </ul>
                                <div class="cart-btn mt-100">
                                    <a href="{{url('checkout')}}" class="btn amado-btn w-100">Checkout</a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div>
                            <p>No item Inside Cart</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    

@endsection
5