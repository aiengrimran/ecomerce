@extends('layouts.appShop')
@section('customCss')
@endsection
@section('navBar')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-5 offset-4 bg-light">
            <form action="{{url('admin/createProduct')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Prcie</label>
                    <input type="number" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number"  name="qty" class="form-control">
                </div>
                
              <div class="form-group m-2">
                    <select name="categoryId" id="" >
                        
                        <option value="" class="form-control">Select Category</option>
                        @foreach ($categories as $category )
                        <option value="{{$category->id}}">{{ $category->categoryName }}</option>
                        @endforeach
                    </select>
                    
              </div><br><br>
                <div class="mt-2 form-group">
                    <label for="select">Short Description</label>
                    <input type="textarea"  name="descrption" class="form-control">
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