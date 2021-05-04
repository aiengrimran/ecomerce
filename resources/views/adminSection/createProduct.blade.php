@extends('layouts.appShop')
@section('navBar')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-5 offset-4 bg-light">
            <form action="{{url('createBedsProduct')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Prcie</label>
                    <input type="number" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number"  name="quantity" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image">Product Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit"  value="Add Product" class="form-control btn btn-success">
               </div>
            </form>
        </div>
        

    </div>

</div>
    
@endsection