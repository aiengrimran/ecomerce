<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Product Slider Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="{{asset('css/v3/bootstrap.min.css')}}">

   <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Similar Products  <small> you may also like </small> </h1>
</div>

<!-- Product Slider - START -->




<div class="container mbotom">
    <div class="row">
        <div class="col-md-6 offset-2  ">
            <h3 class="heading">Products from same Categorie</h3>
        </div>
        
        <div class="col-md-3">
            <!-- Controls -->
            <div class="controls pull-right hidden-xs">
                <a class="left fa fa-chevron-left btn btn" href="#carousel-example"
                    data-slide="prev"></a><a class="right fa fa-chevron-right btn" href="#carousel-example"
                        data-slide="next"></a>
            </div>
        </div>
    </div>
    <div class="row">
       
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        @foreach ($similarProducts as $product)
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5> {{ $product->title }}</h5>
                                            <h5 class="price-text-color">$ {{ $product->price }}</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i>
                                            <i class="price-text-color fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="photo">
                                    <img style="height: 250px; width:350px;" src="{{asset('storage/'.$product->image)}}" class="img-responsive productImage" alt="a" />
                                </div>
                                <div class="info">
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
                                        </p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="#" class="hidden-sm"> {{ $product->description }}</a>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .heading{
        color: #00990E;
        font-size: 30px;
    }
.mbotom{
margin-bottom: 25vh;
}
.col-item
{
    border: 2px solid #23a166;
    border-radius: 5px;
    background: #FFF;
}
.col-item .photo img
{
    margin: 0 auto;
    /* width: 100%; */
}

.col-item .info
{
    padding: 10px;
    border-radius: 0 0 5px 5px;
    margin-top: 1px;
}
.col-item:hover .info {
    background-color: rgba(215, 215, 244, 0.5); 
}
.col-item .price
{
    /*width: 50%;*/
    float: left;
    margin-top: 5px;
}

.col-item .price h5
{
    line-height: 20px;
    margin: 0;
}

.price-text-color
{
    color: #00990E;
}

.col-item .info .rating
{
    color: #990000;
}

.col-item .rating
{
    /*width: 50%;*/
    float: left;
    font-size: 17px;
    text-align: right;
    line-height: 52px;
    margin-bottom: 10px;
    height: 52px;
}

.col-item .separator
{
    border-top: 1px solid #FFCCCC;
}

.clear-left
{
    clear: left;
}

.col-item .separator p
{
    line-height: 20px;
    margin-bottom: 0;
    margin-top: 10px;
    text-align: center;
}

.col-item .separator p i
{
    margin-right: 5px;
}
.col-item .btn-add
{
    width: 50%;
    float: left;
}

.col-item .btn-add
{
    border-right: 1px solid #CC9999;
}

.col-item .btn-details
{
    width: 50%;
    float: left;
    padding-left: 10px;
}
.controls
{
    margin-top: 20px;
}
[data-slide="prev"]
{
    margin-right: 10px;
}
</style>

<!-- Product Slider - END -->

</div>

</body>
</html>