@extends('app')
@section('content')
<div class="product-breadcroumb">
    <a href="index">Home</a>
    <a href="cart">Cart</a>
</div>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shopping Cart</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Search Products</h2>
                    <form role="timkiem" action="{{ route('timkiem.product', 'searchproduct') }}" method="get">
                        <input type="text" placeholder="Search products..." name="key">
                        <button style="border-radius: 10px;" type="submit">Search</button>
                    </form>
                </div>

                <div class="single-sidebar">
                    <h2 class="sidebar-title">Latest Products</h2>
                    @foreach($product_cart as $data )
                    <div class="thubmnail-recent">
                        <a href="{{route('single.product',$data->id)}}"><img src="{{asset('img/' . $data->product_image)}}" class="recent-thumb" alt=""></a>
                        <h2><a href="{{route('single.product',$data->id)}}">{{$data->product_name}}</a></h2>
                        <div class="product-sidebar-price">
                            {{number_format( $data->product_price,0, ',', '.')}} vnđ
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="single-sidebar">
                    <h2 class="sidebar-title">Recent Posts</h2>
                    @foreach($product_cart as $data)
                    <ul>
                        <li><a href="{{route('single.product',$data->id)}}">{{$data->product_name}}</a></li>
                    </ul>
                    @endforeach
                </div>
            </div>

            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="#">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Tên Sản Phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-quantity">Số Lượng</th>
                                        <th class="product-subtotal">Tổng Tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart->getList() as $key => $value)
                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <form method="POST" action="{{ route('cart.remove', 'removeFromCart') }}">
                                                @csrf
                                                <button type="submit" title="Remove this item">×</button>
                                            </form>
                                        </td>

                                        <td class="product-thumbnail">
                                            <a href="{{route('single.product','product')}}"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="{{asset('img')}}/{{$value['product_image']}}"></a>
                                        </td>

                                        <td class="product-name">
                                            <a href="{{route('single.product','product')}}">{{$value['product_name']}}</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="amount">{{number_format( $value['product_price'],0, ',', '.')}} vnđ</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="quantity buttons_added">
                                                <input id="quantity-{{$key}}" style="text-align: center;" type="number" size="4" class="input-text qty text" title="Qty" value="{{$value['quantity']}}" min="0" step="1">
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="amount" id="subtotal-{{$key}}">{{number_format( $value['product_price'] * $value['quantity'],0, ',', '.')}} vnđ</span>
                                        </td>
                                    </tr>


                                    @endforeach
                                    <tr>

                                        <td colspan="6">
                                            <h4 style=" margin-bottom: -15px; margin-top: 10px;">Tổng tiền thanh toán ({{count($cart->getList())}} sản phẩm): {{number_format($cart->getTotalPrice() ,0, ',', '.')}} vnđ</h4>
                                            <button style="border-radius: 10px; margin-right: -600px; margin-top: -600px;" type="submit">Thanh Toán</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>

                        <div class="cart-collaterals">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection