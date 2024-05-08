@extends('app')
@section('content')
<style>
    .product-review {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        background-color: #f9f9f9;
    }

    #star-rating {
        font-size: 2em;
        cursor: pointer;
    }

    .star {
        color: grey;
    }

    .star.selected {
        color: gold;
    }

    textarea {
        width: 100%;
        height: 100px;
        margin-top: 10px;
    }
</style>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Chi Tiết Sản Phẩm</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-sidebar">
                    <h2 class="sidebar-title">Tìm Kiếm</h2>
                    <form role="timkiem" action="{{ route('timkiem.product', 'searchproduct') }}" method="get">
                        <input type="text" placeholder="Tìm Kiếm Sản Phẩm..." name="key">
                        <button style="border-radius: 10px;" type="submit">Tìm Kiếm</button>
                    </form>
                </div>

                <div class="single-sidebar">
                    <h2 class="sidebar-title">Sản Phẩm Mới</h2>
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
            </div>

            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <a href="">Trang Chủ</a>
                        <a href="">Tóp Khuyến Mãi</a>
                        <a href="{{route('topsellers.product',$topselersproducts->id)}}">{{$topselersproducts->topsale_name}}</a>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="{{asset('img/' . $topselersproducts->topsale_image)}}" alt="">
                                </div>

                                <!-- <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                    </div> -->
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name">{{$topselersproducts->topsale_name}}</h2>
                                <div class="product-inner-price">
                                    {{number_format( $topselersproducts->topsale_price,0, ',', '.')}} vnđ
                                </div>

                                <form action="{{route('cart.add','add')}}" class="cart" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$topselersproducts->id}}">
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                    </div>
                                    <button class="add_to_cart_button" type="submit">Thêm Giỏ Hàng</button>
                                </form>

                                <div class="product-inner-category">
                                    <p>Category: <a href="">Phone</a></p>
                                </div>

                                <div role="tabpanel">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mô Tả</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Đánh Giá Sản Phẩm</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h2>Mô Tả</h2>
                                            <p> {{$topselersproducts->topsale_detail}}</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
        
                                            <h1>Đánh giá sản phẩm</h1>
                                            <div class="product-review">
                    
                                                <div id="star-rating">
                                                    <span class="star " data-rating="1">&#9734;</span>
                                                    <span class="star" data-rating="2">&#9734;</span>
                                                    <span class="star" data-rating="3">&#9734;</span>
                                                    <span class="star" data-rating="4">&#9734;</span>
                                                    <span class="star" data-rating="5">&#9734;</span>
                                                </div>
                                                <textarea id="review-text" placeholder="Nhập đánh giá của bạn..."></textarea>
                                                <button onclick="submitReview()">Gửi đánh giá</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="related-products-wrapper">
                        <h2 class="related-products-title">Bài Viết Đánh Giá</h2>
                        <div id="review-list">
                    
                        </div>
                    </div

                   
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.star').forEach(function(star) {
    star.addEventListener('click', function() {
        let rating = parseInt(this.getAttribute('data-rating'));
        setRating(rating);
    });
});

function setRating(rating) {
    document.querySelectorAll('.star').forEach(function(star) {
        let starRating = parseInt(star.getAttribute('data-rating'));
        if (starRating <= rating) {
            star.classList.add('selected');
        } else {
            star.classList.remove('selected');
        }
    });
}

function submitReview() {
    const selectedStar = document.querySelector('.star.selected:last-child');
    const rating = selectedStar ? parseInt(selectedStar.getAttribute('data-rating')) : 0;

    console.log("Giá trị rating:", rating);
    let reviewText = document.getElementById('review-text').value;
    const data = {
        product_name: '{{$topselersproducts->topsale_name}}',
        rating: rating,
        review_text: reviewText
    };

    fetch('http://localhost:3000/submit-review', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
})
    .then((response) => {
        console.log("HTTP Status:", response.status);
        if (!response.ok) {
            throw new Error('Không thể gửi đánh giá'); 
        }
        return response.json(); 
    })
    .then((data) => {
        console.log('Đánh giá đã được gửi:', data);
        alert('Cảm ơn bạn đã đánh giá sản phẩm!');
    })
    .catch((error) => {
        console.error('Lỗi khi gửi đánh giá:', error);
        alert('Có lỗi xảy ra khi gửi đánh giá');
    });

}



function loadReviews(product_name,rating,review_text) {
    console.log("Đang tải đánh giá cho sản phẩm:", product_name,rating,review_text);
    fetch('http://localhost:3000/get-reviews/product_name')
        .then(response => {
            if (!response.ok) {
                throw new Error('Lỗi khi tải đánh giá');
            }
            return response.json();
        })
        .then(data => {
            console.log("Dữ liệu đánh giá nhận được:", data);
            const reviewContainer = document.getElementById('review-list');
            reviewContainer.innerHTML = '';

            data.forEach(review => {
                const reviewElement = document.createElement('div'); 
                reviewElement.classList.add('review'); 
                reviewElement.innerHTML = `
                    <h3>Đánh giá: ${review.rating} sao</h3>
                    <p>${review.review_text}</p>
                `;
                reviewContainer.appendChild(reviewElement); 
            });
        })
        .catch(error => {
            console.error('Lỗi khi tải đánh giá:', error);
        });
}

document.addEventListener('DOMContentLoaded', function() {
    loadReviews('{{$topselersproducts->topsale_name}}');
});

</script>


@endsection