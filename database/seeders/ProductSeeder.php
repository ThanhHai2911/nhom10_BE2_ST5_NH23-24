<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
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

            [
                'product_name' => 'Samsung Galaxy S24',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => '24.000.000 vnđ',
                'product_detail' => 'Điện thoại Samsung Galaxy S24 được trang bị bộ xử lý Exynos 2400 do Samsung tự sản xuất với 10 nhân CPU cùng bộ nhớ RAM 8GB, bộ nhớ trong 256GB. Màn hình thiết bị với kích thước 6.2 inch với khung viền siêu mỏng cùng công nghệ Dynamic AMOLED 2X.',
                'product_image' => 'samsunggalaxys24.png'
            ],

            [
                'product_name' => 'Samsung Galaxy A55 5G',
                'product_type' => '1',
                'product_quantity' => 20,
                'product_price' => '9.500.000 vnđ',
                'product_detail' => 'Samsung Galaxy A55 thiết kế sang trọng, hiện đại với màn hình rộng 6.6 inch, tấm nền Super AMOLED cùng độ phân giải Full HD+ cho hình ảnh hiển thị mượt mà, sắc nét. Sở hữu con chip Exynos 1480, cùng tần số quét 120 Hz cho trải nghiệm sử dụng không bị giật, lag.',
                'product_image' => 'samsunga55.png'
            ],

            [
                'product_name' => 'Macbook Pro 14 M3 Pro 18GB - 512GB',
                'product_type' => '2',
                'product_quantity' => 20,
                'product_price' => '50.000.000 vnđ',
                'product_detail' => 'Macbook Pro 14 inch M3 Pro 2023 - Hiệu suất khủng, tản nhiệt hiệu quả Macbook Pro M3 Pro bản 14 inch 18GB/512GB có khả năng lý đồ họa chuyên sâu, kết cấu 3D một cách ổn định và mượt mà. Bên cạnh đó, sản phẩm có chất lượng hiển thị rất sắc nét, và tần số quét lên tới 120Hz, giúp người dùng làm việc hiệu quả, nhanh chóng. ',
                'product_image' => 'macbookpro.png'
            ],

            [
                'product_name' => 'Apple Macbook Air M2 2022 16GB 256GB',
                'product_type' => '2',
                'product_quantity' => 30,
                'product_price' => '32.000.000 vnđ',
                'product_detail' => 'Apple Macbook Air M2 2022 16GB 256GB thiết kế siêu mỏng 1.13cm, trang bị chip M2 8 nhân GPU, 16 nhân Neural Engine, RAM khủng 16GB, SSD 256GB, màn hình IPS Liquid Retina Display cùng hệ thống 4 loa cho trải nghiệm đỉnh cao.',
                'product_image' => 'macbookair15.png'
            ],

            [
                'product_name' => 'iMac M3 24 inch 8GB 256GB 8GPU',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '34.500.000 vnđ',
                'product_detail' => 'iMac M3 2023 24 inch là mẫu iMac thế hệ mới sở hữu một cấu hình vượt trội với con CPU 8 lõi Apple M3 cùng với bộ nhớ RAM 8GB và dung lượng lưu trữ 256GB. iMac M3 mới được trang bị tới bảy phiên bản màu khác nhau bao gồm: Xanh dương, Xanh lá, Hồng, Bạc, Vàng, Cam và Tím. Cùng với đó, mẫu iMac này được trong bị màn hình 24 inch Retina 4,5K mang lại khả năng hiển thị vượt trội.',
                'product_image' => 'imacM3.png'
            ],

            [
                'product_name' => 'Mac Studio 2022 M1 Max 10 CPU',
                'product_type' => '2',
                'product_quantity' => 25,
                'product_price' => '14.000.000 vnđ',
                'product_detail' => 'Mac Studio là chiếc máy tính để bàn sở hữu thiết kế vô cùng ấn tượng. Bên cạnh đó là hiệu năng mạnh mẽ giúp cho mọi thứ trở nên dễ dàng hơn trong tầm tay. Đặc biệt hơn nữa là hệ thống cổng kết nối đa dạng cho khả năng kết nối dễ dàng và nhanh chóng hơn.',
                'product_image' => 'macstudio.png'
            ],

            [
                'product_name' => 'Laptop ASUS Gaming ROG Zephyrus G14',
                'product_type' => '2',
                'product_quantity' => 20,
                'product_price' => '32.586.000 vnđ',
                'product_detail' => 'Laptop Asus Gaming ROG Zephyrus G14 GA402NJ-L4056W nổi bật với kích thước thon gọn đi kèm với hiệu suất hoạt động mạnh mẽ. Cấu hình laptop Asus gaming này được trang bị con chip thế hệ mới của nhà AMD cùng dung lượng bộ nhớ vượt trội giúp xử lý mượt mà mọi tác vụ chiến game.',
                'product_image' => 'laptopgamingasusrog.png'
            ],

            [
                'product_name' => 'Laptop ASUS Gaming ROG Zephyrus G16',
                'product_type' => '2',
                'product_quantity' => 20,
                'product_price' => '52.300.000 vnđ',
                'product_detail' => 'Laptop ASUS Gaming ROG Zephyrus G16 GU605MV-QR135W được trang bị chipset Intel Core Ultra 9 processor 185H 2.3GHz tích hợp công nghệ Intel AI Boost NPU. Sản phẩm sử dụng card đồ họa NVIDIA GeForce RTX 4060 kết hợp cùng RAM 32GB cho tốc độ xử lý ấn tượng. Công nghệ làm mát 3 quạt giúp tản nhiệt hiệu quả giảm tới 10 độ C cho cả GPU và CPU. Màn hình OLED chuẩn Pantone hiển thị sống động với độ sáng tối đa 500 nits. ',
                'product_image' => 'gaming.png'
            ],

            [
                'product_name' => 'Laptop ASUS Zenbook 14 OLED',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '32.040.000 vnđ',
                'product_detail' => 'Laptop Asus Zenbook 14 OLED UX3405MA PP152W có kích thước nhỏ gọn 14 inch, độ phân giải 3K cùng màn hình OLED Lumia cho chất lượng hiển thị chi tiết. Bên cạnh đó, sản phẩm laptop Asus Zenbook còn trang bị chipset Intel Core Ultra 7 125H, GPU Intel Arc Graphics cùng bộ nhớ RAM 32GB và SSD 1TB, mang đến hiệu năng ưu việt với các tác vụ đồ họa nặng cùng không gian lưu trữ rộng lớn. ',
                'product_image' => 'asuszenbook14.png'
            ],
            
            [
                'product_name' => 'Laptop Lenovo LOQ',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '30.000.000 vnđ',
                'product_detail' => 'Laptop Lenovo LOQ 15IAX9 83GS000RVN sở hữu một hiệu năng mạnh mẽ khi được trang bị bộ vi xử lý Intel Core i5 12450HX cùng card đồ hoạ rời RTX 4050. Đi kèm là 16GB RAM cùng ổ cứng SSD 512GB để có được khả năng đa nhiệm mượt mà, tốc độ đọc/ghi dữ liệu nhanh chóng. Màn hình 15,6 inch Full HD 144Hz tích hợp công nghệ G-Sync được tối ưu để mang tới khả năng hiển thị ấn tượng cho mục đích giải trí.',
                'product_image' => 'lgRog.png'
            ],

            [
                'product_name' => 'Laptop HP Zbook Firefly 14 G8',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '21.400.000 vnđ',
                'product_detail' => 'Laptop HP Zbook Firefly 14 G8 1A2F1AV sở hữu một thiết kế sang trọng cùng với cấu hình ổn định hứa hẹn mang lại cho người dùng trải nghiệm mượt mà và ổn định.',
                'product_image' => 'laptop.png'
            ],

            [
                'product_name' => 'Laptop Gaming Acer Nitro 5 Tiger',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '23.070.000 vnđ',
                'product_detail' => 'Laptop Acer Nitro 5 Tiger AN515-58-52SP mang vẻ ngoài phong thái sắc sảo, tích hợp hàng loạt công nghệ phần mềm đời mới và đặc biệt là bộ vi xử lý Intel ổn định. Chứa đựng hiệu năng siêu vượt trội đã góp phần làm nên chiếc laptop Acer Nitro 5 dẫn đầu phân khúc.',
                'product_image' => 'acernitro5.png'
            ],

            [
                'product_name' => 'Laptop Acer Aspire 7',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '19.500.000 vnđ',
                'product_detail' => 'Laptop Acer Aspire 7 A715 76G 5806 được trang bị bộ vi xử lý i5 12450H cùng card màn hình rời 4GB RTX3050 và dung lượng RAM 16GB, ổ cứng SSD 512 GB. Máy sở hữu màn hình 15.6 inch FHD với tần số 144Hz. Ngoài ra, sản phẩm laptop Acer Aspire còn nổi bật với thiết kế tối giản, bền bỉ nhờ vỏ nhựa cùng nắp lưng kim loại cứng cáp.',
                'product_image' => 'laptopaser.png'
            ],

            [
                'product_name' => 'Laptop LG Gram 2023 ',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '23.760.000 vnđ',
                'product_detail' => 'Laptop LG gram 2023 14Z90R-G.AH75A5 – Một siêu phẩm công nghệ táo bạo, đầy hiện đại mà ông lớn LG mang đến cho người dùng của mình. Với tất cả sự hoàn hảo cao nhất từ cấu hình, thiết kế đến hiệu năng và mọi hoạt động của laptop LG Gram 2023 thì đây đích thị là lựa chọn hàng đầu mà nhiều người.',
                'product_image' => 'laptoplg.png'
            ],

            [
                'product_name' => 'iPad Pro 11 inch 2022 M2 Wifi 128GB',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '21.040.000 vnđ',
                'product_detail' => 'Sự thay đổi lớn về thiết kế và cấu hình chính là những yếu tố giúp cho iPad Pro 2022 chiếc máy tính bảng mới nhất từ Apple - hứa hẹn sẽ là một trong những mẫu máy tính bảng cực kỳ hấp dẫn trong năm 2022.',
                'product_image' => 'ipadpro2022.png'
            ],

            [
                'product_name' => 'iPad mini 6 WiFi 64GB',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '9.000.000 vnđ',
                'product_detail' => 'iPad Mini 6 được Apple thiết kế với hình dáng nhỏ gọn cân đối chiều dài và ngang giúp bạn có thể mang theo bên mình mọi lúc mọi nơi để hỗ trợ cho quá trình học tập, làm việc hay giải trí một cách dễ dàng.',
                'product_image' => 'ipadmini6.png'
            ],
            
            [
                'product_name' => 'iPad Pro 11 inch 2022 M2',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '25.400.000 vnđ',
                'product_detail' => 'iPad Pro 11 2022 M2 Wifi 5G 128GB vừa qua đã được hãng Apple cho ra mắt với nhiều tính năng cao cấp. Cùng với những cải tiến mới như trang bị dòng chip xịn sò, kết hợp với viên pin có dung lượng ổn định, chiếc iPad Pro thế hệ mới này hứa hẹn sẽ mang đến sự trải nghiệm thú vị cho bạn.',
                'product_image' => 'ipadpro13.png'
            ],

            [
                'product_name' => 'Samsung Galaxy Tab S9 Ultra 12GB 512GB',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '21.400.000 vnđ',
                'product_detail' => 'Samsung Galaxy Tab S9 Ultra là thế hệ tablet mới của nhà Samsung với thiết kế đẹp mắt, thanh lịch, màn hình Dynamic AMOLED 2X cùng với chipset Snapdragon 8 gen 2 mạnh mẽ cân mọi tác vụ. Bên cạnh đó, thời lượng pin của Galaxy Tab S9 Ultra cũng được cải thiện so với người tiền nhiệm để mang đến trải nghiệm lâu hơn cho người dùng.',
                'product_image' => 'samsunggalaxytabs9.png'
            ],

            [
                'product_name' => 'Xiaomi Pad 6s Pro 8GB 256GB',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '10.000.000 vnđ',
                'product_detail' => 'Xiaomi Pad 6S Pro sở hữu màn hình 12.4 inch kích thước lớn cùng độ phân giải 3K hiển thị sống động, tần số quét 144Hz. Máy tính bảng với cấu hình từ con chip được sản xuất trên tiến trình 4nm - Snapdragon® 8 thế hệ 2. Cùng với đó, thiết bị sở hữu viên pin dung lượng lớn 10000 mah cùng sạc nhanh công suất 120W.',
                'product_image' => 'xiaomiTab.png'
            ],
            
            [
                'product_name' => 'iPad Pro 11 2021 M1 WiFi 128GB',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '21.000.000 vnđ',
                'product_detail' => 'iPad Pro 11 inch 2021 sở hữu ngoại hình mang nhiều điểm tương tự về ngoại hình với chiếc iPad Pro trước đó. Apple iPad Pro 2021 sử dụng màn hình kích thước 11 inch và sử dụng màn hình LCD truyền thống.  Màn hình trên iPad Pro 2021 này với công nghệ màu ProMotion cùng độ phân giải cao 264 pixel mỗi inch. Màn hình này cũng được trang bị lớp phủ chống bám vân tay và chống phản xạ, nâng cao trải nghiệm cho người dùng.',
                'product_image' => 'ipadpro13.png'
            ]

        ]);
    }
}
