
@extends('layouts/page')

@section('content')

<div class="banner-agile">
    <div class="container">
        <h2>WELCOME TO</h2>
        <h3>GUITAR <span>SHOP</span></h3>
        <p>Suspendisse sed tellus id libero pretium interdum. Suspendisse potenti. Quisque consectetur elit sit amet vehicula tristique. </p>
        <a href="#">Read More</a>
    </div>
</div>
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
            <a href='guitars/{{"solid_body"}}'><div class="bb-left-agileits-w3layouts-inner">
                <h3>SALE</h3>
                <h4>upto<span>75%</span></h4>
            </div></a>
        </div>
        <div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
            <a href='guitars/{{"hollow_body"}}'><div class="bb-middle-top">
                <h3>SALE</h3>
                <h4>upto<span>55%</span></h4>
            </div></a>
            <a href='guitars/{{"bass"}}'><div class="bb-middle-bottom">
                <h3>SALE</h3>
                <h4>upto<span>65%</span></h4>
            </div></a>
        </div>
        <div class="col-md-3 bb-grids bb-right-agileits-w3layouts">
            <a href='guitars/{{"amps"}}'><div class="bb-right-top">
                <h3>SALE</h3>
                <h4>upto<span>50%</span></h4>
            </div></a>
            <a href='guitars/{{"acoustic"}}'><div class="bb-right-bottom">
                <h3>SALE</h3>
                <h4>upto<span>60%</span></h4>
            </div></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="top-products">
    <div class="container">
        <h3>Top Products</h3>
        <div class="sap_tabs">          
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item"><span>Solid</span></li>
                    <li class="resp-tab-item"><span>Jazz</span></li>
                    <li class="resp-tab-item"><span>Bass</span></li>    
                    <li class="resp-tab-item"><span>Amps</span></li>                        
                </ul>   
                <div class="clearfix"></div>   
                <div class="resp-tabs-container">
                    @foreach ($top_products as $top_product)
                    <div class="tab-1 resp-tab-content">
                        @foreach ($top_product as $product)
                        <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                            <a href='product/{{$product->alias}}'><div class="product-img">
                                @foreach ($images as $image)    
                                    @if ($image->product_id == $product->id)

                                         <img src='{{$image->img}}' alt="" />
                                    @endif
                                @endforeach
                            </div></a>
                            @if ($product->rating <= 1)
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            @elseif ($product->rating <= 2)
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            @elseif ($product->rating <= 3)
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            @elseif ($product->rating <= 4)
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>   
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            @else
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>                       
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            @endif
                            <h4>{{$product->name}}</h4>
                            <h5>${{$product->price}}.00</h5>
                            <button class="btn btn-primary" id="price_{{$product->id}}" value="{{$product->price}}" onclick='add_to_cart({{$product->id}})'><i class="fa fa-cart-plus" aria-hidden="true"> Add to cart</i></button>
                            
                        </div>                          
                        @endforeach
                    </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
            </div>                      
        </div>
    </div>
</div>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
    });     
</script>
<div class="fandt">
    <div class="container">
        <div class="col-md-12 features">
            <h3>Our Services</h3>
            <div class="support">
                <div class="col-md-2 ficon hvr-rectangle-out">
                    <i class="fa fa-user " aria-hidden="true"></i>
                </div>
                <div class="col-md-10 ftext">
                    <h4>24/7 online free support</h4>
                    <p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="shipping">
                <div class="col-md-2 ficon hvr-rectangle-out">
                    <i class="fa fa-bus" aria-hidden="true"></i>
                </div>
                <div class="col-md-10 ftext">
                    <h4>Free shipping</h4>
                    <p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
                </div>  
                <div class="clearfix"></div>
            </div>
            <div class="money-back">
                <div class="col-md-2 ficon hvr-rectangle-out">
                    <i class="fa fa-money" aria-hidden="true"></i>
                </div>
                <div class="col-md-10 ftext">
                    <h4>100% money back</h4>
                    <p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
                </div>  
                <div class="clearfix"></div>                
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
    <script src="js/jquery.wmuSlider.js"></script> 
    <script>
        $('.example1').wmuSlider();         
    </script> 
</div>
<!-- top-brands -->
    <div class="top-brands">
        <div class="container">
            <h3>Top Brands</h3>
            <div class="sliderfig">
                <ul id="flexiselDemo1">         
                    <li>
                        <img src="images/4.png" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/5.png" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/6.png" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/7.png" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/8.png" alt=" " class="img-responsive" />
                    </li>
                </ul>
            </div>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 4,
                    animationSpeed: 1000,
                    autoPlay: false,
                    autoPlaySpeed: 3000,            
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: { 
                        portrait: { 
                            changePoint:480,
                            visibleItems: 1
                        }, 
                        landscape: { 
                            changePoint:640,
                            visibleItems:2
                        },
                        tablet: { 
                            changePoint:768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>
<!-- //top-brands -->
@endsection