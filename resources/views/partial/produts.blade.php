<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">
        @foreach ($products as $product)
            
       
        <!-- Single Catagory -->
        <div class="single-products-catagory clearfix">
            <a href="shop.html">
                <img src="{{asset('storage/img/bg-img/2.jpg')}}" alt="">
                <!-- Hover Content -->
                <div class="hover-content">
                    <div class="line"></div>
                    <p>From ${{ $product->price}}</p>
                    <h4>{{ $product->title }}</h4>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>