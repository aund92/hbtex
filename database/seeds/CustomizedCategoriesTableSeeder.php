<?php

use Illuminate\Database\Seeder;

class CustomizedCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'category_name' => 'Túi Xách Nữ',
                'image' => 'images/category/159436076639382296.jpeg',
                'description' => '<p>BỘ ĐỒ CHƠI GỒM NHIỀU SỰ LỰA CHỌN ĐỒ CHƠI GI&Aacute;O DỤC THEO PHƯƠNG PH&Aacute;P MONTESSORI ĐỂ BA MẸ C&Oacute; THỂ CHỌN NHỮNG NHỮNG M&Oacute;N PH&Ugrave; HỢP NHẤT CHO CON CỦA M&Igrave;NH CHẤT LIỆU GỖ TRƠN MỊN AN TO&Agrave;N V&Agrave; TH&Acirc;N THIỆN VỚI M&Ocirc;I TRƯỜNG,H&Atilde;Y C&Ugrave;NG KH&Aacute;M PH&Aacute; NHỮNG T&Iacute;NH NĂNG ĐẶC BIỆT SAU Đ&Acirc;Y NHA</p>',
                'slug' => 'tui-xach-nu',
                'icon' => 'fa icon-handbag',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-07-15 01:48:00',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 1,
                'category_name' => 'Túi Đeo Chéo Nữ',
                'image' => 'images/category/159436077196734124.jpeg',
                'description' => '<p>Ba mẹ lu&ocirc;n muốn mang đến cho con những điều tốt đẹp nhất đến với sức khỏe cũng như sự ph&aacute;t triển của con. C&oacute; thể n&oacute;i dưới 3 th&aacute;ng tuổi l&agrave; độ tuổi tốt nhất để gi&uacute;p trẻ cải thiện kỹ năng vận động v&agrave; tr&iacute; th&ocirc;ng minh của m&igrave;nh. Khi đ&oacute; đ&ocirc;i tay của trẻ đang dần trở n&ecirc;n cứng c&aacute;p, muốn cầm nắm đồ chơi. Ch&iacute;nh v&igrave; như vậy, ba mẹ thường c&oacute; xu hướng mua rất nhiều loại đồ chơi kh&aacute;c nhau để th&uacute;c đẩy c&aacute;c hoạt động cơ thể cho con. Nhưng kh&ocirc;ng phải đồ chơi n&agrave;o b&eacute; cũng th&iacute;ch, cũng ph&ugrave; hợp độ tuổi của con. Một c&acirc;u hỏi được đưa ra đ&oacute; l&agrave;: N&ecirc;n mua&nbsp;những loại đồ chơi&nbsp;như thế n&agrave;o mới&nbsp;ph&ugrave; hợp với trẻ dưới 3 th&aacute;ng tuổi?&nbsp;</p>',
                'slug' => 'tui-deo-cheo-nu-2',
                'icon' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-07-13 10:51:34',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 1,
                'category_name' => 'Ví/Bóp Nữ',
                'image' => 'images/category/159436075265154175.jpeg',
                'description' => '<hr />
<p>C&aacute;c b&eacute; thường hay ch&uacute; &yacute; v&agrave; được th&iacute;ch th&uacute; với những&nbsp;đồ chơi&nbsp;ph&aacute;t ra tiếng v&agrave; đặc biệt l&agrave; c&oacute; th&ecirc;m nhạc, đ&acirc;y cũng l&agrave; thời kỳ m&agrave; n&atilde;o bộ của trẻ học hỏi rất nhanh ch&iacute;nh v&igrave; thế cho b&eacute; tiếp x&uacute;c với &acirc;m nhạc cũng gi&uacute;p b&eacute; được tư duy ph&aacute;t triển tr&iacute; n&atilde;o tốt cho sau n&agrave;y hơn. Hiện nay tr&ecirc;n thị trường c&oacute; rất loại đồ chơi &acirc;m nhạc cho b&eacute; v&agrave; sau đ&acirc;y b&agrave;i viết n&agrave;y sẽ chỉ cho c&aacute;c mẹ những m&oacute;n đồ chơi &acirc;m nhạc đang được ưa chuộng nhất hiện nay.</p>',
                'slug' => 'vi-bop-nu-1',
                'icon' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-07-10 05:59:12',
            ),
            3 => 
            array (
                'id' => 5,
                'parent_id' => 1,
                'category_name' => 'dsadsa',
                'image' => 'images/category/159463758388914427.png',
                'description' => '<p>dasdsa</p>',
                'slug' => 'dsadsa',
                'icon' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'parent_id' => NULL,
                'category_name' => 'gfdgfd',
                'image' => 'images/category/159463759164813073.png',
                'description' => '<p>gfdgfd</p>',
                'slug' => 'gfdgfd-1',
                'icon' => 'fa icon-handbag',
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-07-15 01:48:17',
            ),
            5 => 
            array (
                'id' => 7,
                'parent_id' => 6,
                'category_name' => 'fsdfsdfdsfdsfsdf',
                'image' => 'images/category/159463760128333901.jpeg',
                'description' => '<p>gfdgfdgfd</p>',
                'slug' => 'fsdfsdfdsfdsfsdf-1',
                'icon' => NULL,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-07-13 10:53:26',
            ),
            6 => 
            array (
                'id' => 8,
                'parent_id' => 1,
                'category_name' => 'Thời trang nam',
                'image' => 'images/category/159477756327168466.jpeg',
                'description' => '<p>bffgbfd</p>',
                'slug' => 'thoi-trang-nam',
                'icon' => 'flaticon-woman',
                'deleted_at' => NULL,
                'created_at' => '2020-07-15 01:46:03',
                'updated_at' => '2020-07-15 01:46:03',
            ),
            7 => 
            array (
                'id' => 9,
                'parent_id' => NULL,
                'category_name' => 'Phụ kiện',
                'image' => 'images/category/159477759560871329.jpeg',
                'description' => '<p>jkjhj</p>',
                'slug' => 'phu-kien',
                'icon' => 'flaticon-sneakers',
                'deleted_at' => NULL,
                'created_at' => '2020-07-15 01:46:35',
                'updated_at' => '2020-07-15 01:47:15',
            ),
            8 => 
            array (
                'id' => 10,
                'parent_id' => NULL,
                'category_name' => 'Thời trang nữ',
                'image' => 'images/category/159477760859977112.jpeg',
                'description' => '<p>ghfhgf</p>',
                'slug' => 'thoi-trang-nu',
                'icon' => 'flaticon-woman',
                'deleted_at' => NULL,
                'created_at' => '2020-07-15 01:46:48',
                'updated_at' => '2020-07-15 01:46:48',
            ),
            9 => 
            array (
                'id' => 11,
                'parent_id' => NULL,
                'category_name' => 'Giày',
                'image' => 'images/category/159477772013358168.jpeg',
                'description' => '<p>fdsdssf</p>',
                'slug' => 'giay',
                'icon' => 'flaticon-sneakers',
                'deleted_at' => NULL,
                'created_at' => '2020-07-15 01:48:41',
                'updated_at' => '2020-07-15 01:48:41',
            ),
            10 => 
            array (
                'id' => 12,
                'parent_id' => NULL,
                'category_name' => 'gfdgdfg',
                'image' => 'images/category/159496886813308350.jpeg',
                'description' => '<p>gdfgfd</p>',
                'slug' => 'gfdgdfg',
                'icon' => 'fa icon-handbag',
                'deleted_at' => NULL,
                'created_at' => '2020-07-17 06:54:28',
                'updated_at' => '2020-07-17 06:54:28',
            ),
            11 => 
            array (
                'id' => 13,
                'parent_id' => NULL,
                'category_name' => 'gfh',
                'image' => 'images/category/159496887586863312.png',
                'description' => '<p>hgfh</p>',
                'slug' => 'gfh',
                'icon' => 'hfgh',
                'deleted_at' => NULL,
                'created_at' => '2020-07-17 06:54:35',
                'updated_at' => '2020-07-17 06:54:35',
            ),
            12 => 
            array (
                'id' => 14,
                'parent_id' => NULL,
                'category_name' => 'hgfh',
                'image' => 'images/category/159496888364866019.jpeg',
                'description' => '<p>hgfh</p>',
                'slug' => 'hgfh',
                'icon' => 'hfgh',
                'deleted_at' => NULL,
                'created_at' => '2020-07-17 06:54:43',
                'updated_at' => '2020-07-17 06:54:43',
            ),
            13 => 
            array (
                'id' => 15,
                'parent_id' => NULL,
                'category_name' => 'hgfh',
                'image' => 'images/category/159496890077926021.png',
                'description' => '<p>hfgh</p>',
                'slug' => 'hgfh-1',
                'icon' => 'hgfhf',
                'deleted_at' => NULL,
                'created_at' => '2020-07-17 06:55:00',
                'updated_at' => '2020-07-17 06:55:00',
            ),
            14 => 
            array (
                'id' => 16,
                'parent_id' => NULL,
                'category_name' => 'hgfh',
                'image' => 'images/category/159496891044283604.png',
                'description' => '<p>hgfhfg</p>',
                'slug' => 'hgfh-2',
                'icon' => 'hfghgfh',
                'deleted_at' => NULL,
                'created_at' => '2020-07-17 06:55:10',
                'updated_at' => '2020-07-17 06:55:10',
            ),
            15 => 
            array (
                'id' => 17,
                'parent_id' => NULL,
                'category_name' => 'gfdgfdgf',
                'image' => 'images/category/159496895837801088.jpeg',
                'description' => '<p>gfdgfd</p>',
                'slug' => 'gfdgfdgf',
                'icon' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-07-17 06:55:58',
                'updated_at' => '2020-07-17 06:55:58',
            ),
        ));
        
        
    }
}