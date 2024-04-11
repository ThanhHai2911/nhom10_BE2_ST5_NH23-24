<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopSaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topsale')->insert([
            [
                'product_name' => 'Iphone 14 ProMax',
                'product_type' => '1',
                'product_quantity' => 20,
                'product_price' => '28.000.000 vnđ',
                'product_detail' => 'iPhone 14 ProMax sở hữu thiết kế màn hình Dynamic Island ấn tượng cùng màn hình OLED 6,7 inch hỗ trợ always-on display và hiệu năng vượt trội với chip A16 Bionic',
                'product_image' => 'iphone14pro.png'
            ],

            [
                'product_name' => 'Iphone 15 ProMax',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => '32.000.000 vnđ',
                'product_detail' => 'iPhone 15 Pro Max thiết kế mới với chất liệu titan chuẩn hàng không vũ trụ bền bỉ, trọng lượng nhẹ, đồng thời trang bị nút Action và cổng sạc USB-C tiêu chuẩn giúp nâng cao tốc độ sạc.',
                'product_image' => 'iphone15promax.png'
            ],

            [
                'product_name' => 'Xiaomi 14',
                'product_type' => '1',
                'product_quantity' => 25,
                'product_price' => '14.000.000 vnđ',
                'product_detail' => 'Xiaomi 14 5G mang trên mình màn hình OLED 6.36-inch,cùng với bộ vi xử lý Qualcomm Snapdragon 8 Gen 3, làm nên một cấu hình siêu mạnh mẽ cho người dùng. Đi kèm với đó là viên pin dung lượng 4610mAh hỗ trợ tốc độ sạc 90W kết hợp cùng hệ thống ba camera sau với cảm biến chính 50MP, đảm bảo hiệu suất và khả năng chụp ảnh ấn tượng',
                'product_image' => 'xiaomi14.png'
            ],
            
            [
                'product_name' => 'iPhone 13 128GB',
                'product_type' => '1',
                'product_quantity' => 20,
                'product_price' => '20.000.000 vnđ',
                'product_detail' => 'Điện thoại iPhone 13 sẽ được sử dụng tấm nền OLED chất lượng cao và có kích thước 6.1 inch, lớn hơn iPhone 13 mini (5.4 inch). Với tấm nền này với công nghệ ProMotion giúp iPhone 13 tiết kiệm pin đến tối đa khi sử dụng. Người dùng cũng có thể dễ dàng điều chỉnh tốc độ làm tươi tùy theo ý thích.',
                'product_image' => 'iphone13.png'
            ],

            [
                'product_name' => 'Samsung Galaxy Z Fold5',
                'product_type' => '1',
                'product_quantity' => 20,
                'product_price' => '33.500.000 vnđ',
                'product_detail' => 'Samsung Galaxy Z Fold5 12GB 256GB tạo nên trải nghiệm xử lý tác vụ siêu mượt mà thông qua chipset Snapdragon 8 Gen 2 đỉnh cao cùng dung lượng RAM lên tới 12GB. Máy được trang bị công nghệ màn hình Dynamic AMOLED 2X 120Hz với kích thước có thể lên tới 7.6 inch khi mở, đem lại trải nghiệm hình ảnh sắc nét trong từng điểm ảnh. Bên cạnh đó, phân khúc smartphone gập này còn sở hữu cụm camera hiện đại với độ sắc nét đạt tới 50MP cùng viên pin 4400mAh.',
                'product_image' => 'samsungzfold5.png'
            ],
        ]);
    }
}
