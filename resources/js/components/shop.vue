<template>

    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
        <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="asset('storage/img/product-img/product1.jpg')" alt="">
                        </div>
                        <!-- Product Description -->
                        <div class="product-description d-flex align-items-center justify-content-between">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price"> product.price (50)</p>
                                <!-- <a href="{{url('productDetails/'.$product->id)}}"> -->
                                    <h6>product.title </h6>
                                <!-- </a> -->
                            </div>
                            <!-- Ratings & Cart -->
                            <div class="ratings-cart text-right">
                                <div class="ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="cart">
                                    <a href=""> Cart</a>
                                    <!-- <a href="{{url('addToCart/'.$product->id)}}" data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="{{asset('storage/img/core-img/cart.png')}}" alt=""></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
</template>
<script>


export default ({
    data() {
        return {
            name : 'imran'

        }
    }   
 
})
</script>
