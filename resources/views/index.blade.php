@extends('home')
@section('content-index')

<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-refresh"></i>
                    <p>30 Days return</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa fa-truck"></i>
                    <p>Free shipping</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa fa-lock"></i>
                    <p>Secure payments</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa fa-gift"></i>
                    <p>New products</p>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End promo area -->

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>

                    <div class="product-carousel">
                        @foreach($data_latestproduct as $data )
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('img/' . $data->latestproduct_image)}}" alt="" class="img-product">
                                <div class="product-hover">
                                    <a href="cart" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to
                                        cart</a>
                                    <a href="{{route('latest.product',$data->id)}}" class="view-details-link"><i
                                            class="fa fa-link"></i> See details</a>
                                </div>
                            </div>
                            <h2><a href="{{route('latest.product',$data->id)}}">{{$data->latestproduct_name}}</a></h2>
                            <div class="product-carousel-price">
                                {{$data->latestproduct_price}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->

<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list">
                    @foreach($category as $data)                                  
                        <a  href="{{route('logo.product',$data->id)}}"><img src="{{asset('img/' . $data->type_logo)}}" style="width: 180px;height: 100px;margin-right: 10px;" alt=""></a>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area -->



<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Top Sellers</h2>
                    @foreach($topseller as $data)
                    <div class="single-wid-product">
                        <a href="{{route('single.product',$data->id)}}"><img src="{{asset('img/' . $data->topsale_image)}}" alt=""
                                class="product-thumb"></a>
                        <h2><a href="{{route('single.product',$data->id)}}">{{$data->topsale_name}}</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            {{$data->topsale_price}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Recently Viewed</h2>
                    @foreach($data_product as $data )
                    <div class="single-wid-product">
                        <a href="{{route('single.product',$data->id)}}"><img src="{{asset('img/' . $data->product_image)}}" alt=""
                                class="product-thumb"></a>
                        <h2><a href="{{route('single.product',$data->id)}}">{{$data->product_name}}</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            {{$data->product_price}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Top New</h2>
                    @foreach($latestproduct as $data )
                    <div class="single-wid-product">
                        <a href="{{route('latest.product',$data->id)}}"><img
                                src="{{asset('img/' . $data->latestproduct_image)}}" alt="" class="product-thumb"></a>
                        <h2><a href="{{route('latest.product',$data->id)}}">{{$data->latestproduct_name}}</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            {{$data->latestproduct_price}}
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div> <!-- End product widget area -->
@endsection