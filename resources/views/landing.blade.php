@extends('./layouts.appShop')
@section('fav')<link rel="icon" href="{{asset('storage/img/core-img/favicon.ico')}}">@endsection
@section('navBar')
    

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

        <!-- Product Catagories Area Start -->
        @include('partial.produts')
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
   @include('partial.newslatter')
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
   @include('partial.footer')
    <!-- ##### Footer Area Start ##### -->
    @endsection