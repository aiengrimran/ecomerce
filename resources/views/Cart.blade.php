@extends('layouts.appShop')
@section('fav')
<div class="container">
  <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2>Shopping Cart</h2>
                    </div>
                    <div>
                       
                    </div>
                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                           @foreach ($items ?? '' ?? '' as $item)  
                         @php $i++; @endphp
                                   <td>{{ $i }}</td>
                                   <td class="cart_product_desc"><h5>{{ $item->name }} </h5></td>
                                    <td class="price"><span>{{ $item->price }} </span></td>
                                    <td class="qty">
                                        <div class="qty-btn d-flex">
                                         <div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty3'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                <input type="number" class="qty-text" id="qty3" step="1" min="1" max="300" name="quantity" value="1" style="width: 90px;">
                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty3'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                        
                                    </td>
                                    <td><p>{{ $item->qty }} <p></td>
                                  <td><button>Delete</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
</div>
    
@endsection