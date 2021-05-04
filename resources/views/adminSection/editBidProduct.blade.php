@extends('layouts.appShop')
@section('navBar')
<div class="container">
    <div class="row m-5">
        <div class="col-md-5 center" offset-4>
            <form action="{{url('editBedProduct')}}" method="post">
                @csrf
                @method('PATCH')
                <input type="hidden" value="{{$bed->id}}" name="id">
                <div class="form-group">
                    <label for="name">New Title</label>
                    <input  class="form-control" type="text" name="name" value="{{$bed->name}}">
                </div>
                <div class="form-group">
                    <label for="price">New Price</label>
                    <input  class="form-control" type="text" name="price" value="{{$bed->price}}">
                </div>
                <div class="form-group">
                    <label for="quantity">New Quantity</label>
                    <input type="text" name="quantity"  class="form-control"  value="{{$bed->quantity}}">
                </div>
                <div class="form-group">
                    <label for="image">New image</label>
                    <input type="text" name="image"  class="form-control"  value="{{$bed->image}}">
                </div>
                <div class="form-group">
                    <input type="submit" value="update" class="btn btn-primary form-control">

                </div>
            </form>
        </div>

    </div>

</div>
    
@endsection