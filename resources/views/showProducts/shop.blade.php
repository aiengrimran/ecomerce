@extends('layouts.appShop')
@section('navBar')


   
    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

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

       @include('partial.Sidebar')

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

              

                @include('partial.shopProducts')

                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                            <ul class="pagination justify-content-end mt-50">
                                <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                                <li class="page-item"><a class="page-link" href="#">02.</a></li>
                                <li class="page-item"><a class="page-link" href="#">03.</a></li>
                                <li class="page-item"><a class="page-link" href="#">04.</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
   @include('partial.newslatter')
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('partial.footer')
    {{ session('chairsget')}}
    {{-- @if (session('chairsget'))
         @forelse ($chairs ?? '' as $chair)
        
   
            <div class="row">
                <div class="col-md-4">

                
                <img src="{{$chair->image}}" alt="">

                <a href="#">{{ $chair->title }}</a>
                <span> {{$chair->price}}</span>
                </div>
            @empty
                
            <p>dsds</p>
            
                
            
                
            </div>
        @endforelse
    @endif --}}
@endsection

