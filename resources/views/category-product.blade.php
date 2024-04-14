@extends('category')
@section('content')
@yield('product-category')
<div class="product-breadcroumb">
  <a href="index"></i>Home</a>
  <a href="{{route('category',$data_category->id)}}">{{$data_category->name}}</a>
</div> 
@foreach($category_product as $data)                                  
<a href="{{route('product.category',$data->id)}}" style="margin-top: 20px;" class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">{{$data->type_name}}</a>
@endforeach
<div class="single-product-area">
    <div class="container">
        <div class="row">
            @foreach($product as $data)
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <a href="{{route('single.product',$data->id)}}"> <img src="{{asset('img/' . $data->product_image)}}" alt=""></a>
                    </div>
                    <h2><a href="{{route('single.product',$data->id)}}">{{$data->product_name}}</a></h2>
                    <div class="product-carousel-price">
                        {{$data->product_price}}
                    </div>
                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Buy</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    @endsection