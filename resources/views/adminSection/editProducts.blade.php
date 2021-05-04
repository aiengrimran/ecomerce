@extends('layouts.appShop')
@section('customCss')
<style>
    table {
        border: 1px solid saddlebrown;
    }
    
</style>
    
@endsection
@section('navBar')
<div class="container m-5 p-4">
    <div class="row ">
        <div class="col-md-5 offset-4 bg-info">
            <h2 class="text-center">Availabe Products</h2>
              <div class="row bg-primary">
                  <div class="col-md-6"><h4 class="text-center">(1) Chairs</h4></div>
                  <div class="col-md-6"><h4 class="text-center">(2) Beds</h4></div>
               </div>  
        </div>
    </div>
    
        <div  style="float: left;">
            <a href="{{url('admin/createProduct')}}" class="btn btn-info text-danger">Add New Product</a>
        </div>
        <div class="" style="float: right;">
            <a href="{{url('admin/createProduct')}}" class="btn btn-info text-danger">Add New Chair</a>
        </div>
       <br> <hr>
       <form action="{{url('searchProduct')}}" method="post">
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
            <tr>
                @foreach ($beds as $bed)   
                <td> {{ $loop->index +1 }} </td>
                <td>{{ $bed->name}}</td>
                <td>{{ $bed->price}}</td>
                <td>{{ $bed->quantity}}</td>
                <td><img src="{{asset($bed->image)}}" style="width: 50px;heigh:50px;"></td>
                <td><form action="{{url('deleteBedProduct')}}" method="post">@csrf
                    
                    <input type="hidden" name="deleteBedProduct" value="{{$bed->id}}">
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form></td>
                <td><a href="{{url('getBedEditView/'.$bed->id)}}" class="btn btn-warning">Edit</a></td>
            </tr> 
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                @foreach ($chairs as $chair)   
                <td> {{ $loop->index +1 }} </td>
                <td>some title</td>
                <td>{{ $chair->price}}</td>
                <td>{{ $chair->quantity}}</td>
                <td><img src="{{asset($chair->image)}}" style="width: 50px;heigh:50px;"></td>
                <td><form action="{{url('deleteChairProduct')}}" method="post">@csrf
                    <input type="hidden" name="deleteChairProduct" value="{{$chair->id}}">
                @method('DELETE')<button type="submit" class="btn btn-danger">Delete</button>
                </form></td>
                <td><a href="#" class="btn btn-warning">Edit</a></td>
            </tr> 
            @endforeach
        </tfoot>
        
    </table>
        
    @else
        <table>
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
                <td>{{$loop->index +1}}</td>
                <td>{{$chair->title}}</td>
                <td>{{$chair->price}}</td>
                <td>{{$chair->quantity}}</td>
                <td><input type="button" value="Delete" class="btn btn-danger"></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        
    @endif
    
   
</div>
    
@endsection