@extends('layouts.appShop')
@section('customCss')
    <style>
        .imgUpdate{
            width: 80px;
            height: 110px;
        }
    </style>
 
@endsection
@section('navBar')
<div class="container mt-5">
    <center><h3>Update Product Information</h3></center>
    <div class="row m-5 bg-light">
        <div class="col-md-5 center offset-3">
            <form action="{{url('admin/editProduct')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <input type="hidden" value="{{$product->id}}" name="id">
                <div class="form-group">
                    <label for="name">New Title</label>
                    <input  class="form-control" type="text" name="title" value="{{$product->title}}">
                </div>
                <div class="form-group">
                    <label for="price">New Price</label>
                    <input  class="form-control" type="text" name="price" value="{{$product->price}}">
                </div>
                <div class="form-group">
                    <label for="quantity">New Quantity</label>
                    <input type="text" name="qty"  class="form-control"  value="{{$product->qty}}">
                </div>
                <div class="form-group">
                    <label for="image">New image</label>
                    
                    <img src="{{asset('storage/'.$product->image)}}" alt="" class="imgUpdate">
                    <input type="file" value="" name="imgUpdate">
                </div>
                <div class="form-group">
                    <input type="submit" value="update" class="btn btn-primary form-control">

                </div>
            </form>
        </div>

    </div>

</div>
    
@endsection