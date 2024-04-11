@extends('app')
@section('content')
<div class="product-breadcroumb">
  <a href="index"></i>Home</a>
  <a href="shop">Shop page</a>
</div> 
@yield('content-products') 
<div class="single-product-area">
  <div class="zigzag-bottom"></div>
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
    <div class="row">
      <div class="col-md-12">
        <div class="product-pagination text-center">
          <nav>
            <ul class="pagination">
              <li>
                <a href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li>
                <a href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection