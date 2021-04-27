<div class="container mt-4">
    @extends('layouts.appShop')
   @section('navBar')
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    @include('partial.header')
                </div>
                <div class="col-md-4">
                    @include('partial.Sidebar')
                </div>
                <div class="col-md-3">
                    @if (session('cartItem'))
                    <p>fddfd</p>
                        
                    @endif
                </div>                
                @foreach ($beds ?? '' as $bed)
                    <div class="col-md-4">
                        <img src="{{ $bed->image }}">
                        <span>{{ $bed->price }}</span>
                        <form action="{{url('addtocart')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$bed->id}}" name="id">
                            <button type="submit" class="btn btn-danger">Add To Cart</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
        @include('partial.newslatter')
        @include('partial.footer')
    @endsection
</div>

