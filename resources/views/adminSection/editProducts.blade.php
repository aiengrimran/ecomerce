@extends('layouts.appShop')
@section('customCss')
    <style>
        table {
            border: 1px solid saddlebrown;
        }

    </style>
@endsection
@section('navBar')
<div class="container mt-4 ">
   
    <div class="row">
        <div class="col-md-5">
            <h2>Availabe Categories</h2>
            <ul class="list-group">
                @foreach ($categories as $products)
                <li class="list-group-item"><h3><a href="{{url('/admin/createProduct')}}">{{ $loop->index +1 }} {{ $products->categoryName }}</a></h3></li>
            </ul>
            @endforeach
        </div>
        <div class="col-md-4 offset-2 bg-light">
            <h3>Create New Category</h3>
            <form action="{{url('admin/createCategory')}}" method="post">
                @csrf
                <div>
                    <label for="category">Category Name :</label>
                    <input type="text" name="categoryName" id="category">

                </div>
                <div>
                    <input type="submit" value="Submit" class="btn btn-info m-2">
                </div>
            </form>

        </div>
    </div>
</div>
@if (Session::has('itemsNotFound'))
    <div class="bg-ligh ml-5 mt-1" style="width: 30%">
        <p>No Record Found</p>
    </div>
@endif
@if (Session::has('itemDeleted'))
    <div class="bg-ligh ml-5 mt-1" style="width: 30%">
        <p>Product Deleted Successfully</p>
    </div>
@endif
<center><h2 class="mt-4">All Products </h2></center>
    <div class="container m-5 p-4">
        <div class="" style="float: right;">
            <a href="{{ url('admin/createProduct') }}" class="btn btn-info ">Add New Product</a>
        </div></br> <hr>
        <form action="{{ url('searchProduct') }}" method="post">
            @csrf
            <div class="text-center bg-light">
                <span>Seach Product Here :</span>
                <input class=" m-3" type="text" name="searchProduct">
                <Button type="submit" class="btn btn-secondary m-2"> Search Product</Button>
            </div>
        </form>
        @if (!Session::has('serachItem'))
            <table class="table table-striped m-5">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Availabe Quantity</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $product)


                        <tr>
                            @foreach ($product->goods as $singleProduct)
                                <td> {{ $loop->index + 1 }} </td>
                                <td>{{ $singleProduct->title }}</td>
                                <td>{{ $singleProduct->price }}</td>
                                <td>{{ $singleProduct->qty }} </td>
                                <td><img src="{{asset('storage/'.$singleProduct->image)}}" style="width: 50px;heigh:50px;" alt=""></td>
                                {{-- <td><img src="{{ asset($singleProduct->image) }}" style="width: 50px;heigh:50px;"> --}}
                                </td>
                                <td>
                                    <form action="{{ url('admin/deleteProduct') }}" method="post">@csrf

                                        <input type="hidden" name="deleteProduct" value="{{ $singleProduct->id }}">
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                <td><a href="{{ url('admin/editProduct/' . $singleProduct->id) }}"
                                        class="btn btn-warning">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
        @endforeach
        <tfoot>

        </tfoot>

        </table>

    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>S.NO</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Available Quanity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach (Session::get('serachItem') as $chair)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $chair->title }}</td>
                        <td>{{ $chair->price }}</td>
                        <td>{{ $chair->quantity }}</td>
                        <td><input type="button" value="Delete" class="btn btn-danger"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @endif


    </div>

@endsection
