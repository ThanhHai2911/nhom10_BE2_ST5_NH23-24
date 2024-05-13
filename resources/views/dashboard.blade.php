<link rel="stylesheet" href="style.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Đơn hàng đã đặt') }}
        </h2>
    </x-slot>

    <div class="single-product-area">
        <div class="container">
            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="#">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-name">Tên Sản Phẩm</th>
                                        <th class="product-quantity">Số Lượng</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-subtotal">Tổng Tiền</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="cart_item">
                                        <td class="product-name">

                                        </td>

                                        <td class="product-quantity">
                               
                                        </td>

                                        <td class="product-price">

                                        </td>

                                        <td class="product-subtotal">
                                        
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).on('click', '.btn-delete', function () {
            var id = $(this).closest('tr').find('.id').text();
            removeItemFromLocalStorage(id);
            $(this).closest('tr').remove();
        });

        function removeItemFromLocalStorage(id) {
            var data = JSON.parse(localStorage.getItem('data'));
            for (var i = 0; i < data.length; i++) {
                if (data[i].id === id) {
                    data.splice(i, 1);
                    break;
                }
            }
            localStorage.setItem('data', JSON.stringify(data));
        }


        function view() {
            var data = JSON.parse(localStorage.getItem('data'));
            data.reverse();
            console.log(data);
            for (var i = 0; i < data.length; i++) {
                var id = data[i].id;
                var name = data[i].name;
                var price = data[i].price;
                var image = data[i].image;
                var promotion = data[i].promotion;
                $('#favotites_list').append('<tr><td class="id">' + id + '</td><td class="product-name">' + name + '</td><td class="product-price">' + price + 'vnđ' + '</td><td class="product-image" ><img src="' + image + '" alt="' + name + '" width="200px" max-height="200px" ></td><td class="product-price">' + promotion + '</td><td><button type="submit" class="btn-delete">Delete</button></td></form></tr>');
            };
        }
        view();
    </script>
</x-app-layout>