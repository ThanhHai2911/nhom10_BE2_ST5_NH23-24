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
                'product_name' => 'Iphone 15 Pro Max',
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
                'product_name' => 'Samsung Galaxy A55',
                'product_type' => '1',
                'product_quantity' => 20,
                'product_price' => '9.500.000 vnđ',
                'product_detail' => 'Samsung Galaxy A55 thiết kế sang trọng, hiện đại với màn hình rộng 6.6 inch, tấm nền Super AMOLED cùng độ phân giải Full HD+ cho hình ảnh hiển thị mượt mà, sắc nét. Sở hữu con chip Exynos 1480, cùng tần số quét 120 Hz cho trải nghiệm sử dụng không bị giật, lag.',
                'product_image' => 'samsunga55.png'
            ],

            [
                'product_name' => 'Macbook Pro M3 Pro',
                'product_type' => '2',
                'product_quantity' => 20,
                'product_price' => '50.000.000 vnđ',
                'product_detail' => 'Macbook Pro 14 inch M3 Pro 2023 - Hiệu suất khủng, tản nhiệt hiệu quả Macbook Pro M3 Pro bản 14 inch 18GB/512GB có khả năng lý đồ họa chuyên sâu, kết cấu 3D một cách ổn định và mượt mà. Bên cạnh đó, sản phẩm có chất lượng hiển thị rất sắc nét, và tần số quét lên tới 120Hz, giúp người dùng làm việc hiệu quả, nhanh chóng. ',
                'product_image' => 'macbookpro.png'
            ],

            [
                'product_name' => 'Macbook Air M2',
                'product_type' => '2',
                'product_quantity' => 30,
                'product_price' => '32.000.000 vnđ',
                'product_detail' => 'Apple Macbook Air M2 2022 16GB 256GB thiết kế siêu mỏng 1.13cm, trang bị chip M2 8 nhân GPU, 16 nhân Neural Engine, RAM khủng 16GB, SSD 256GB, màn hình IPS Liquid Retina Display cùng hệ thống 4 loa cho trải nghiệm đỉnh cao.',
                'product_image' => 'macbookair15.png'
            ],

            [
                'product_name' => 'iMac M3',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '34.500.000 vnđ',
                'product_detail' => 'iMac M3 2023 24 inch là mẫu iMac thế hệ mới sở hữu một cấu hình vượt trội với con CPU 8 lõi Apple M3 cùng với bộ nhớ RAM 8GB và dung lượng lưu trữ 256GB. iMac M3 mới được trang bị tới bảy phiên bản màu khác nhau bao gồm: Xanh dương, Xanh lá, Hồng, Bạc, Vàng, Cam và Tím. Cùng với đó, mẫu iMac này được trong bị màn hình 24 inch Retina 4,5K mang lại khả năng hiển thị vượt trội.',
                'product_image' => 'imacM3.png'
            ],

            [
                'product_name' => 'Mac Studio M1 Max',
                'product_type' => '2',
                'product_quantity' => 25,
                'product_price' => '14.000.000 vnđ',
                'product_detail' => 'Mac Studio là chiếc máy tính để bàn sở hữu thiết kế vô cùng ấn tượng. Bên cạnh đó là hiệu năng mạnh mẽ giúp cho mọi thứ trở nên dễ dàng hơn trong tầm tay. Đặc biệt hơn nữa là hệ thống cổng kết nối đa dạng cho khả năng kết nối dễ dàng và nhanh chóng hơn.',
                'product_image' => 'macstudio.png'
            ],

            [
                'product_name' => 'Laptop ASUS Gaming',
                'product_type' => '2',
                'product_quantity' => 20,
                'product_price' => '32.586.000 vnđ',
                'product_detail' => 'Laptop Asus Gaming ROG Zephyrus G14 GA402NJ-L4056W nổi bật với kích thước thon gọn đi kèm với hiệu suất hoạt động mạnh mẽ. Cấu hình laptop Asus gaming này được trang bị con chip thế hệ mới của nhà AMD cùng dung lượng bộ nhớ vượt trội giúp xử lý mượt mà mọi tác vụ chiến game.',
                'product_image' => 'laptopgamingasusrog.png'
            ],

            [
                'product_name' => 'Laptop ASUS Gaming ROG',
                'product_type' => '2',
                'product_quantity' => 20,
                'product_price' => '52.300.000 vnđ',
                'product_detail' => 'Laptop ASUS Gaming ROG Zephyrus G16 GU605MV-QR135W được trang bị chipset Intel Core Ultra 9 processor 185H 2.3GHz tích hợp công nghệ Intel AI Boost NPU. Sản phẩm sử dụng card đồ họa NVIDIA GeForce RTX 4060 kết hợp cùng RAM 32GB cho tốc độ xử lý ấn tượng. Công nghệ làm mát 3 quạt giúp tản nhiệt hiệu quả giảm tới 10 độ C cho cả GPU và CPU. Màn hình OLED chuẩn Pantone hiển thị sống động với độ sáng tối đa 500 nits. ',
                'product_image' => 'gaming.png'
            ],

            [
                'product_name' => 'Laptop ASUS Zenbook',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '32.040.000 vnđ',
                'product_detail' => 'Laptop Asus Zenbook 14 OLED UX3405MA PP152W có kích thước nhỏ gọn 14 inch, độ phân giải 3K cùng màn hình OLED Lumia cho chất lượng hiển thị chi tiết. Bên cạnh đó, sản phẩm laptop Asus Zenbook còn trang bị chipset Intel Core Ultra 7 125H, GPU Intel Arc Graphics cùng bộ nhớ RAM 32GB và SSD 1TB, mang đến hiệu năng ưu việt với các tác vụ đồ họa nặng cùng không gian lưu trữ rộng lớn. ',
                'product_image' => 'asuszenbook14.png'
            ],

            [
                'product_name' => 'Laptop HP Zbook Firefly',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '21.400.000 vnđ',
                'product_detail' => 'Laptop HP Zbook Firefly 14 G8 1A2F1AV sở hữu một thiết kế sang trọng cùng với cấu hình ổn định hứa hẹn mang lại cho người dùng trải nghiệm mượt mà và ổn định.',
                'product_image' => 'laptop.png'
            ],

            [
                'product_name' => 'iPad Pro 2022 M2 Wifi',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '21.040.000 vnđ',
                'product_detail' => 'Sự thay đổi lớn về thiết kế và cấu hình chính là những yếu tố giúp cho iPad Pro 2022 chiếc máy tính bảng mới nhất từ Apple - hứa hẹn sẽ là một trong những mẫu máy tính bảng cực kỳ hấp dẫn trong năm 2022.',
                'product_image' => 'ipadpro2022.png'
            ],

            [
                'product_name' => 'iPad mini 6 WiFi',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '9.000.000 vnđ',
                'product_detail' => 'iPad Mini 6 được Apple thiết kế với hình dáng nhỏ gọn cân đối chiều dài và ngang giúp bạn có thể mang theo bên mình mọi lúc mọi nơi để hỗ trợ cho quá trình học tập, làm việc hay giải trí một cách dễ dàng.',
                'product_image' => 'ipadmini6.png'
            ],
            
            [
                'product_name' => 'iPad Pro 2022 M2',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '25.400.000 vnđ',
                'product_detail' => 'iPad Pro 11 2022 M2 Wifi 5G 128GB vừa qua đã được hãng Apple cho ra mắt với nhiều tính năng cao cấp. Cùng với những cải tiến mới như trang bị dòng chip xịn sò, kết hợp với viên pin có dung lượng ổn định, chiếc iPad Pro thế hệ mới này hứa hẹn sẽ mang đến sự trải nghiệm thú vị cho bạn.',
                'product_image' => 'ipadpro13.png'
            ],

            [
                'product_name' => 'Samsung Galaxy Tab S9',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '21.400.000 vnđ',
                'product_detail' => 'Samsung Galaxy Tab S9 Ultra là thế hệ tablet mới của nhà Samsung với thiết kế đẹp mắt, thanh lịch, màn hình Dynamic AMOLED 2X cùng với chipset Snapdragon 8 gen 2 mạnh mẽ cân mọi tác vụ. Bên cạnh đó, thời lượng pin của Galaxy Tab S9 Ultra cũng được cải thiện so với người tiền nhiệm để mang đến trải nghiệm lâu hơn cho người dùng.',
                'product_image' => 'samsunggalaxytabs9.png'
            ],

            [
                'product_name' => 'Xiaomi Pad 6s Pro',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '10.000.000 vnđ',
                'product_detail' => 'Xiaomi Pad 6S Pro sở hữu màn hình 12.4 inch kích thước lớn cùng độ phân giải 3K hiển thị sống động, tần số quét 144Hz. Máy tính bảng với cấu hình từ con chip được sản xuất trên tiến trình 4nm - Snapdragon® 8 thế hệ 2. Cùng với đó, thiết bị sở hữu viên pin dung lượng lớn 10000 mah cùng sạc nhanh công suất 120W.',
                'product_image' => 'xiaomiTab.png'
            ],
            
            [
                'product_name' => 'iPad Pro 2021 M1 ',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '21.000.000 vnđ',
                'product_detail' => 'iPad Pro 11 inch 2021 sở hữu ngoại hình mang nhiều điểm tương tự về ngoại hình với chiếc iPad Pro trước đó. Apple iPad Pro 2021 sử dụng màn hình kích thước 11 inch và sử dụng màn hình LCD truyền thống.  Màn hình trên iPad Pro 2021 này với công nghệ màu ProMotion cùng độ phân giải cao 264 pixel mỗi inch. Màn hình này cũng được trang bị lớp phủ chống bám vân tay và chống phản xạ, nâng cao trải nghiệm cho người dùng.',
                'product_image' => 'ipadpro13.png'
            ],

            [
                'product_name' => 'iPhone 11 64GB',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => '9.870.000 vnđ',
                'product_detail' => 'iPhone 11 sở hữu hiệu năng khá mạnh mẽ, ổn định trong thời gian dài nhờ được trang bị chipset A13 Bionic. Màn hình LCD 6.1 inch sắc nét cùng chất lượng hiển thị Full HD của máy cho trải nghiệm hình ảnh mượt mà và có độ tương phản cao. Hệ thống camera hiện đại được tích hợp những tính năng công nghệ mới kết hợp với viên Pin dung lượng 3110mAh, giúp nâng cao trải nghiệm của người dùng.',
                'product_image' => 'iPhone 11.png'
            ],

            [
                'product_name' => 'iPad Pro M3 5G',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '23.760.000 vnđ',
                'product_detail' => 'iPad Pro 11 inch M3 5G sở hữu công nghệ màn hình OLED, tần số quét 120Hz và trang bị con chip Apple M3 kết hợp với phiên bản iPadOS 17 đem lại hiệu năng vượt trội. Bên cạnh đó, chiếc máy tính bảng iPad Pro này có hai camera 12MP và 10MP, dung lượng RAM tối đa 16GB đa nhiệm cực kỳ tốt. ',
                'product_image' => 'ipadprom3.png'
            ],

            [
                'product_name' => 'Laptop Gaming Acer Nitro 5',
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
                'product_name' => 'Samsung Galaxy Tab S9',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '15.760.000 vnđ',
                'product_detail' => 'Samsung Galaxy Tab S9 Wifi sở hữu màn hình kích thước 11 inch Dynamic AMOLED 2X cùng tần số quét 120Hz mang lại trải nghiệm hình ảnh mượt mà và ổn định. Cấu hình máy tính bảng Samsung mới này cũng mạnh mẽ với con chip Snapdragon® 8 Gen 2 cùng với đó là sự hỗ trợ của bút Spen thế hệ mới tiện lợi. Máy còn ấn tượng với khả năng kháng nước và bụi bẩn IP68 cùng camera độ phân giải cao.',
                'product_image' => 'Samsung Galaxy Tab S9 Wifi.png'
            ],

            [
                'product_name' => 'Laptop Acer Gaming Aspire 5',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '19.500.000 vnđ',
                'product_detail' => 'Laptop Acer Gaming Aspire 5 A515 58GM 53PZ thu hút giới game thủ khi có giao diện mỏng nhẹ, đậm chất gaming cùng hiệu năng mạnh mẽ với Core i5 H thế hệ 13. Kết hợp với card rời NVIDIA GeForce RTX 2050 4GB, RAM DDR4 8GB cùng bộ nhớ trong PCIe NVMe Gen 4 512GB cho tốc độ xử lý các tác vụ từ cơ bản đến nâng cao nhanh chóng và mượt mà. ',
                'product_image' => 'Acer Gaming.png'
            ],

            [
                'product_name' => 'iPad Pro 11 inch M3 5G',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '23.760.000 vnđ',
                'product_detail' => 'iPad Pro 11 inch M3 5G sở hữu công nghệ màn hình OLED, tần số quét 120Hz và trang bị con chip Apple M3 kết hợp với phiên bản iPadOS 17 đem lại hiệu năng vượt trội. Bên cạnh đó, chiếc máy tính bảng iPad Pro này có hai camera 12MP và 10MP, dung lượng RAM tối đa 16GB đa nhiệm cực kỳ tốt. ',
                'product_image' => 'ipadprom3.png'
            ],
//
            [
                'product_name' => 'Xiaomi Redmi Note 12',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => '12.300.000 vnđ',
                'product_detail' => 'Xiaomi Redmi Note 12 8GB 128GB tỏa sáng với diện mạo viền vuông cực thời thượng cùng hiệu suất mạnh mẽ nhờ sở hữu con chip Snapdragon 685 ấn tượng. Chất lượng hiển thị hình ảnh của Redmi Note 12 Vàng cũng khá sắc nét thông qua tấm nền AMOLED 120Hz hiện đại. Chưa hết, máy còn sở hữu cụm 3 camera với độ rõ nét lên tới 50MP cùng viên pin 5000mAh và s ạc nhanh 33W giúp đáp ứng được mọi nhu cầu sử dụng của người dùng.',
                'product_image' => 'rebmi12.png'
            ],

            [
                'product_name' => 'Xiaomi Redmi Note 13',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => '14.300.000 vnđ',
                'product_detail' => 'Xiaomi Redmi Note 13 Pro Plus sở hữu màn hình rộng 6.67 inch, trang bị bộ vi xử lý Dimensity 7200 đem lại hiệu năng kinh ngạc. Với dung lượng pin 5000 mAh cùng hỗ trợ sạc nhanh lên đến 120W. Camera 200MP và khả năng zoom 4x mở ra những trải nghiệm chụp ảnh độc đáo và đa dạng.',
                'product_image' => 'redmi13pro.png'
            ],

            [
                'product_name' => 'Xiaomi 13T Pro 5G',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => '10.790.000 vnđ',
                'product_detail' => 'Xiaomi 13T Pro là flagship mới nhất nhà Xiaomi, mạnh mẽ ấn tượng với chip MediaTek Dimensity 9200+, cùng với đó là RAM 12GB và bộ nhớ trong lên tới 512GB. Đặc biệt, khả năng chụp ảnh đỉnh cao nhờ cụm camera siêu chất, viên pin lớn 5000mAh cùng sạc nhanh 120W. Tất cả sẽ mang tới một siêu phẩm đình đám giúp bạn có được trải nghiệm độc đáo và khẳng định được cá tính của mình.',
                'product_image' => 'xiami13t.png'
            ],

            [
                'product_name' => 'iPhone 13 Pro Max',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => '22.300.000 vnđ',
                'product_detail' => 'Phone 13 Pro Max chắc chắn sẽ là chiếc smartphone cao cấp được quan tâm nhiều nhất trong năm 2021. Dòng iPhone 13 series được ra mắt vào ngày 14 tháng 9 năm 2021 tại sự kiện "California Streaming" diễn ra trực tuyến tương tự năm ngoái cùng với 3 phiên bản khác là iPhone 13, 13 mini và 13 Pro. Vậy điện thoại 13 Pro Max giá bao nhiêu? Có gì nổi bật? Cùng tìm hiểu ngay nhé!',
                'product_image' => 'iphone13promax.png'
            ],

            [
                'product_name' => 'iPhone 13 ',
                'product_type' => '1',
                'product_quantity' => 30,
                'product_price' => '18.900.000 vnđ',
                'product_detail' => 'iPhone 13 sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).',
                'product_image' => 'iphone12.png'
            ],
            
            [
                'product_name' => 'Laptop ASUS TUF Gaming',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '19.799.000 vnđ',
                'product_detail' => 'Laptop Asus TUF Gaming A15 FA507NU-LP140W đem tới hiệu suất xử lý khủng nhờ được trang bị chipset AMD Ryzen 5 7535HS và VGA NVIDIA GeForce RTX 4050 6GB. Cùng với đó là khả năng lưu trữ và đa nhiệm xuất sắc thông qua dung lượng RAM 8GB DDR5-4800 SO-DIMM cùng ổ cứng 512GB PCIe 4.0 NVMe M.2 SSD. Ngoài ra, dòng laptop Asus Gaming này còn sở hữu màn hình 15.6 inches với công nghệ hiển thị tiên tiến, hỗ trợ độ sáng 250nits và độ phủ màu sRGB 100% siêu thực.',
                'product_image' => 'tubgaming.png'
            ],

            [
                'product_name' => 'Laptop Asus Expertbook',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '14.560.000 vnđ',
                'product_detail' => 'Laptop ASUS ExpertBook B1402CBA-NK2669W mạnh mẽ nhờ được trang bị bộ vi xử lý Intel Core I5-1235U, RAM 16GB kết hợp cùng ổ cứng SSD 512GB PCIe. Màn hình 14.0 inch Full HD mang tới chất lượng hình ảnh sắc nét vượt trội. Hệ điều hành Windows 11 và thiết kế mỏng nhẹ cùng tone màu sang trọng mang tới lựa chọn tuyệt vời cho người dùng.',
                'product_image' => 'laptopasus.png'
            ],

            [
                'product_name' => 'Laptop Dell Vostro',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '11.000.000 vnđ',
                'product_detail' => 'Laptop Dell Vostro 3520 là một trong những sản phẩm laptop Dell Vostro đáng chú ý của thương hiệu Dell, được thiết kế để đáp ứng nhu cầu làm việc và giải trí của người dùng hiện đại. Với thiết kế nhỏ gọn, hiệu năng mạnh mẽ và tính năng bảo mật ấn tượng, sản phẩm này sẽ là một trợ thủ đắc lực cho công việc và giải trí hàng ngày của bạn.',
                'product_image' => 'laptopdellvostro.png'
            ],

            [
                'product_name' => 'Laptop Gigabyte',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '19.300.000 vnđ',
                'product_detail' => 'Laptop Gigabyte G5 MF-F2VN333SH thuộc phân khúc cao cấp có thể hỗ trợ người dùng trải nghiệm nhiều tựa game với hiệu ứng đồ họa bắt mắt. Nổi bật với bộ vi xử lý đầu bảng của Intel và dung lượng bộ nhớ vượt trội, chiếc laptop Gigabyte hứa hẹn sẽ là người bạn đồng hành tuyệt vời giúp chiến thắng trong các trận đấu. ',
                'product_image' => 'giga.png'
            ],

            [
                'product_name' => 'Laptop Surface Pro 9',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '15.790.000 vnđ',
                'product_detail' => 'Laptop Surface Pro 9 là dòng laptop 13 inch sở hữu thiết kế đẹp mắt, tính di động cao để thao tác sử dụng thêm linh hoạt. Surface Pro 9 còn mang đến hiệu suất mạnh mẽ, giúp xử lý nhanh mọi tác vụ và có thể giải trí được với game 3D.',
                'product_image' => 'surface.png'
            ],

            [
                'product_name' => 'Laptop HP Gaming Victus',
                'product_type' => '2',
                'product_quantity' => 10,
                'product_price' => '21.320.000 vnđ',
                'product_detail' => 'Laptop HP Gaming Victus 15 FB1023AX 94F20PA được trang bị bộ xử lý trung tâm AMD Ryzen 5 7535HS 6 nhân, 12 luồng với tốc độ xung nhịp lên tới 4.5GHz. RAM dung lượng 8GB xử lý tốt khối lượng công việc tốt và phù hợp để thiết kế đồ hoạ 2D. VGA NVIDIA Geforce RTX 2050 4GB trên laptop HP Victus này mang tới trải nghiệm chiến game mượt mà trên màn hình rộng 15.6 inch cùng tần số quét 144Hz ấn tượng. ',
                'product_image' => 'hpgaming.png'
            ],

            [
                'product_name' => 'iPad Air 6 M2',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '15.670.000 vnđ',
                'product_detail' => 'iPad Air 6 M2 là mẫu máy tính bảng đến từ thương hiệu Apple sang trọng với một cấu hình vượt trội. Vậy iPad Air 6 M2 chính hãng này có gì nổi bật về thiết kế và cấu hình, cùng hiểu ngay sau đây.',
                'product_image' => 'ipadair6.png'
            ],

            [
                'product_name' => 'Redmi Pad SE',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '17.450.000 vnđ',
                'product_detail' => 'Máy tính bảng Xiaomi Redmi Pad SE sở hữu màn hình LCD 11 inch với tần số quét 90hz cùng chứng nhận bảo vệ mắt TÜV Rheinland ánh sáng xanh thấp và không nhấp nháy. Cùng với đó, tablet còn được trang bị loa Dolby Atmos âm thanh nổi giúp mang lại trải nghiệm âm thanh ấn tượng. Máy với ba lựa chọn màu sắc là xanh bạc hà, tím Lavender và xám khoáng thạch.',
                'product_image' => 'redmipadse.png'
            ],

            [
                'product_name' => 'TCL Tab 11',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '5.300.000 vnđ',
                'product_detail' => 'Máy tính bảng TCL Tab 11 với màn hình IPS LCD 1200 x 2000 pixels kích thước lớn 10.95 inches cùng dải màu 16.7 triệu màu mang lại trải nghiệm hiển thị sống động. Cùng với đó, máy còn được trang bị một cấu hình mạnh mẽ với 4GB RAM cùng con chip Mediatek Helio P60T Octa-core. TCL Tab 11 còn tương tích với bút T-Pen giúp người dùng take-note, ghi chú một cách dễ dàng.',
                'product_image' => 'tcltab11.png'
            ],

            [
                'product_name' => 'Nokia T21',
                'product_type' => '3',
                'product_quantity' => 10,
                'product_price' => '7.200.000 vnđ',
                'product_detail' => 'Nokia T21 là một cái tên đã không còn quá xa lạ với những tín đồ đam mê công nghệ. Được phát triển từ phiên bản đời trước là Nokia T20, T21 đã có những bước đột phá về thiết kế bên ngoài và cấu hình bên trong, mang tới cho người dùng một trải nghiệm cực kỳ thú vị và mới lạ.',
                'product_image' => 'nokiat21.png'
            ],

            [
                'product_name' => 'TECNO SPARK 20PRO+',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => '8.300.000 vnđ',
                'product_detail' => 'Tecno Spark 20 Pro Plus sở hữu cấu hình cực ấn tượng trong phân khúc giá rẻ với chip Helio G99 Ultimate, 8GB RAM (+8GB mở rộng) cùng bộ nhớ 256GB. Màn hình AMOLED 6,78 inch 120 Hz sẽ luôn mang tới chất lượng hiển thị của điện thoại. Hệ thống camera có độ phân giải 108MP, hỗ trợ quay video 2K đáp ứng tốt cho nhu cầu sống ảo của người dùng.',
                'product_image' => 'tecnospark20.png'
            ],

            [
                'product_name' => 'Samsung Galaxy S23 Ultra',
                'product_type' => '1',
                'product_quantity' => 10,
                'product_price' => '22.140.000 vnđ',
                'product_detail' => 'Samsung S23 Ultra là dòng điện thoại cao cấp của Samsung, sở hữu camera độ phân giải 200MP ấn tượng, chip Snapdragon 8 Gen 2 mạnh mẽ, bộ nhớ RAM 8GB mang lại hiệu suất xử lý vượt trội cùng khung viền vuông vức sang trọng. Sản phẩm được ra mắt từ đầu năm 2023.',
                'product_image' => 's23ultra.png'
            ],
        ]);

    }
}
