<div class="container mt-4">
@extends('layouts.appShop')

    @section('navBar')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                @include('partial.header')
            </div>
            <div class="col-md-2">
                @include('partial.Sidebar')
            </div>
            @foreach ($beds as $bed)
            <div class="col-md-4">
            
                    <img src="{{$bed->image}}">
                    <span>{{ $bed->price }}</span>
                    
                    <p>{{ $bed->created_at }}</p>
                
                
            </div>
            @endforeach
            


        </div>
    </div>
@include('partial.newslatter')
@include('partial.footer')

    @endsection
</div>

