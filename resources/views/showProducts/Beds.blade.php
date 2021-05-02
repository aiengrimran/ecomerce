@extends('layouts.appShop')
@section('section')  
    <!-- Search Wrapper Area Start -->
    @include('partial.serach')
    <!-- Mobile Nav (max width 767px)-->
    <div class="mobile-nav">
        <!-- Navbar Brand -->
        <div class="amado-navbar-brand">
            <a href="index.html"><img src="{{asset('storage/img/core-img/logo.png')}}" alt=""></a>
        </div>
        <!-- Navbar Toggler -->
        <div class="amado-navbar-toggler">
            <span></span><span></span><span></span>
        </div>
    </div>

    <!-- Header Area Start -->
    @include('partial.header')
    <!-- Header Area End -->
    <p>sasa</p>
    @if (session('cartItem'))
        <p>fddfd</p>
    @endif     
    @foreach ($beds as $bed)
        <div class="col-md-4">
            <img class="productImage" src="{{ $bed->image }}">
            <span>{{ $bed->price }}</span>
            <form action="{{url('addtocart')}}" method="post">
                @csrf
                <input type="hidden" value="{{$bed->id}}" name="id">
                <button type="submit" class="btn btn-danger">Add To Cart</button>
            </form>
        </div>
    @endforeach
@endsection
@section('customCss')
{{-- <style>
    .productImage {
    width:350px;
    heght:400px;
}
</style> --}}
    
@endsection
