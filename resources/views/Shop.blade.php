@extends('layouts.appShop')

@section('navBar')
<style>
    svg {
        height: 80px;
        width: 60px;
    }
</style>

  @include('partial.products1')
<!-- Search Wrapper Area End -->

<!-- ##### Main Content Wrapper Start ##### -->
<div class="main-content-wrapper d-flex clearfix">

   @include('partial.header')
    <div class="shop_sidebar_area">

        <!-- ##### Single Widget ##### -->
        <div class="widget catagory mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Catagories</h6>

            <!--  Catagories  -->
            <div class="catagories-menu">
                {{-- @foreach ($categories as $category) --}}
                <ul>
                    <li><a href="">Books</a></li>
                    <li><a href="">Books</a></li>
                    {{-- <li class=""><a href="{{url('/getProducts/'.$category->id)}}">{{ $category->categoryName}}</a></li> --}}

                </ul>
                {{-- @endforeach --}}
            </div>
        </div>

        <!-- ##### Single Widget ##### -->
        <div class="widget brands mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Brands</h6>

            <div class="widget-desc">
                <!-- Single Form Check -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="amado">
                    <label class="form-check-label" for="amado">Amado</label>
                </div>
                <!-- Single Form Check -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="ikea">
                    <label class="form-check-label" for="ikea">Ikea</label>
                </div>
                <!-- Single Form Check -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="artdeco">
                    <label class="form-check-label" for="artdeco">Artdeco</label>
                </div>
            </div>
        </div>

        <!-- ##### Single Widget ##### -->
        <div class="widget color mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Color</h6>

            <div class="widget-desc">
                <ul class="d-flex">
                    <li><a href="#" class="color1"></a></li>
                    <li><a href="#" class="color2"></a></li>
                    <li><a href="#" class="color3"></a></li>
                    <li><a href="#" class="color4"></a></li>
                    <li><a href="#" class="color5"></a></li>
                    <li><a href="#" class="color6"></a></li>
                    <li><a href="#" class="color7"></a></li>
                    <li><a href="#" class="color8"></a></li>
                </ul>
            </div>
        </div>

        <!-- ##### Single Widget ##### -->
        <div class="widget price mb-50">
            <!-- Widget Title -->
            <h6 class="widget-title mb-30">Price</h6>

            <div class="widget-desc">
                <div class="slider-range">
                    <div data-min="10" data-max="1000" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10" data-value-max="1000" data-label-result="">
                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                    </div>
                    <div class="range-price">$10 - $1000</div>
                </div>
            </div>
        </div>
    </div>

    <div class="amado_product_area section-padding-100">
        <div class="container-fluid">

            @include('partial.ProductFilter')
            <div class="row" id="app">
                <Shop></Shop>
               
             
            </div>
            
            
            
        
            <div class="row">
                <div class="col-12">
                    <!-- Pagination -->
                    {{-- {{ $products->links() }} --}}
                    <nav aria-label="navigation">
                        <ul class="pagination justify-content-end mt-50">
                            <li class="page-item active"><a class="page-link" href="">01.</a></li>
                            <li class="page-item"><a class="page-link" href="">02.</a></li>
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
@include('partial.footer')
    <script src="{{asset('js/app.js')}}"></script>
@endsection