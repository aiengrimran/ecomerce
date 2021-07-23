@extends('layouts.appShop')
@section('customCss')
@section('section')

    
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
                        <div class="col-md-12">
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
                                                    <a href="#"><img src="/admin/getimage/{{$item->id}}"  style="height:100px;widows: 100px;" alt="Product"></a>
                                                </td>
                                                <td class="cart_product_desc">
                                                    <h5>{{ $item->name }}</h5>
                                                </td>
                                                <td class="price">
                                                    <span>${{ $item->price }} </span>
                                                </td>
                                                <td class="qty">
                                                    <div class="qty-btn d-flex">
                                                       
                                                    <a href="{{ url('moveToCart/'. $item->rowId. '/'. $item->id) }}"
                                                        class="btn btn-success">Move To Cart</a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                     
                    @else
                        <div>
                            <p>No item Selected Is Favorite</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    

@endsection
