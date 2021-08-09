<div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">
        @foreach ($products as $product)
          @foreach ($product->goods as $item)
            <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="{{url('/productDetails/'.$item->id)}}">
                    <img src="{{url('admin/getimage/'.$item->id)}}" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>From ${{ $item->price}}</p>
                        <h4>{{ $item->title }}</h4>
                    </div>
                </a>
            </div>
         @endforeach
        @endforeach
    </div>
</div>