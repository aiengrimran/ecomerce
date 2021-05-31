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
<header class="header-area clearfix">
    <!-- Close Icon -->
    <div class="nav-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <!-- Logo -->
    <div class="logo">
        <a href="index.html"><img src="{{asset('storage/img/core-img/logo.png')}}" alt=""></a>
    </div>
    <!-- Amado Nav -->
    <nav class="amado-nav">
        <ul>
            <li class="active"><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/getProductsCategoreis')}}">Shop</a></li>
            <li><a href="{{url('/AboutMe')}}">About Us</a></li>
            <li><a href="{{url('/getCartItems')}}">Cart Page {{Cart::instance('cart')->content()->count()}}</a></li>
            <li><a href="{{url('/checkoutForm')}}">Checkout</a></li>
        </ul>
    </nav>
    @auth
        <div class="amado-btn-group mt-30 mb-100">
            <a class="btn amado-btn" href="{{url('userDashboard')}}">Dashborad</a>
            <form action="{{url('logout')}}" method="post">
            @csrf
            <button class="btn amado-btn mt-2" style="background-color: blue;">Logout</button>
            </form>
            
        </div>
    @else
            <!-- Button Group -->
        <div class="amado-btn-group mt-30 mb-100">
            <a href="{{url('/register')}}" class="btn amado-btn mb-15">Register</a>
            <a href="{{url('login')}}" class="btn amado-btn active">Log In</a>
        </div> 
    @endauth
   
    <!-- Cart Menu -->
    <div class="cart-fav-search mb-100">
        <a href="{{url('/getCartItems')}}" class="cart-nav"><img src="{{asset('storage/avatars/Y5xHBNHN83J8DX6iyMsPALtx3eidzidv8T3snpkN.jpg')}}" alt=""> Cart <span>( {{Cart::instance('cart')->content()->count()}}) <span></a>
        <a href="#" class="fav-nav"><img src="{{asset('storage/img/core-img/favorites.png')}}" alt=""> Favourite {{Cart::instance('favorite')->content()->count()}}</a>
        <a href="#" class="search-nav"><img src="{{asset('storage/img/core-img/search.png')}}" alt=""> Search</a>
    </div>
    <!-- Social Button -->
    <div class="social-info d-flex justify-content-between">
        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    </div>
</header>