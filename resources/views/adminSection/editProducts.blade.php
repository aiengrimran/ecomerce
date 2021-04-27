@extends('layouts.appShop')
@section('navBar')
<div class="container m-5">
    <div class="row">
        <div class="col-md-5 offset-4 bg-info">
            <h2 class="text-center">Availabe Products</h2>
              <div class="row bg-primary">
                  <div class="col-md-6"><h4 class="text-center">Chairs</h4></div>
                  <div class="col-md-6"><h4 class="text-center">Beds</h4></div>
               </div>  
        </div>
    </div>
    <table class="table table-striped">
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
                <td>{{ $bed->image }}</td>
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
                <td>{{ $chair->title}}</td>
                <td>{{ $chair->price}}</td>
                <td>{{ $chair->quantity}}</td>
                <td>{{ $chair->image }}</td>
                <td><form action="{{url('deleteChairProduct')}}" method="post">@csrf
                    <input type="hidden" name="deleteChairProduct" value="{{$chair->id}}">
                @method('DELETE')<button type="submit" class="btn btn-danger">Delete</button>
                </form></td>
                <td><a href="#" class="btn btn-warning">Edit</a></td>
            </tr> 
            @endforeach
        </tfoot>
        
    </table>
</div>
    
@endsection