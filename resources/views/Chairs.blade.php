@extends('layouts.appShop')
@section('navBar')

<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('partial.header')
        </div>
        <div class="col-md-3">
            @include('partial.Sidebar')
        </div>
        @foreach ($chairs as $chair)

        
        <div class="col-md-3">
        
            <img src="{{$chair->image}}"  alt="image">
            
            <p class="bg-info">{{ $chair->price }}</p>
            <i>{{ $chair->quntity }}</i>

        </div>

        
        
        @endforeach
    </div>
</div>
@endsection