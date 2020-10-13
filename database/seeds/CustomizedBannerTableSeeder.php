<?php

use Illuminate\Database\Seeder;

class CustomizedBannerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banner')->delete();
        
        \DB::table('banner')->insert(array (
            0 => 
            array (
                'id' => 1,
                'content' => '<h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">Sale 50% Duy Nhất Hôm Nay</h5>
<h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Thời Trang Nữ</h2>',
                'image' => 'images/banner/1594948526308604.jpeg',
                'position' => 1,
                'category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-07-17 02:00:26',
            ),
            1 => 
            array (
                'id' => 2,
                'content' => '<h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">50% off Toàn Bộ Sản Phẩm</h5>
<h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Thời Trang Nam</h2>',
                'image' => 'images/banner/159495137848836751.jpeg',
                'position' => 1,
                'category_id' => 8,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-07-17 02:02:58',
            ),
            2 => 
            array (
                'id' => 3,
                'content' => '<h5 class="mb-3 staggered-animation font-weight-light" data-animation="slideInLeft" data-animation-delay="0.5s">Thời Trang Trẻ Em</h5>
<h2 class="staggered-animation" data-animation="slideInLeft" data-animation-delay="1s">Summer Sale</h2>',
                'image' => 'images/banner/159495151926561508.jpeg',
                'position' => 1,
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2020-07-15 07:46:48',
                'updated_at' => '2020-07-17 02:05:19',
            ),
            3 => 
            array (
                'id' => 4,
                'content' => '<h5 class="single_bn_title1">Áo Nữ</h3>
<h3 class="single_bn_title"> 40% Off</h4>',
                'image' => 'images/banner/159494901736982491.jpeg',
                'position' => 2,
                'category_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2020-07-17 01:23:37',
                'updated_at' => '2020-07-17 01:43:09',
            ),
            4 => 
            array (
                'id' => 5,
                'content' => '<h3 class="single_bn_title">Quần Áo Nam</h3>
<h4 class="single_bn_title1">Sản Phẩm Mới </h4>',
                'image' => 'images/banner/159494904718457697.jpeg',
                'position' => 2,
                'category_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2020-07-17 01:24:07',
                'updated_at' => '2020-07-17 01:43:32',
            ),
            5 => 
            array (
                'id' => 6,
                'content' => 'ggggggggggggg',
                'image' => 'images/banner/159495261736603488.jpeg',
                'position' => 3,
                'category_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2020-07-17 02:23:37',
                'updated_at' => '2020-07-17 02:23:37',
            ),
            6 => 
            array (
                'id' => 7,
                'content' => 'gggg',
                'image' => 'images/banner/159495262548334882.jpeg',
                'position' => 3,
                'category_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2020-07-17 02:23:45',
                'updated_at' => '2020-07-17 02:23:45',
            ),
            7 => 
            array (
                'id' => 8,
                'content' => 'ggfdgfdg',
                'image' => 'images/banner/159495263536382060.jpeg',
                'position' => 3,
                'category_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2020-07-17 02:23:55',
                'updated_at' => '2020-07-17 02:23:55',
            ),
        ));
        
        
    }
}