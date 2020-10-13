<?php

use Illuminate\Database\Seeder;

class CustomizedProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_name' => 'Jadior size 20 fullbox sổ Size 20',
                'image' => 'images/product/159436202220741158.jpeg',
                'image_2' => NULL,
                'category_id' => 2,
                'brand' => 1,
                'supplier' => 1,
                'country_make' => 1,
                'origin_price' => '300000.00',
                'price' => '450000.00',
                'discount' => NULL,
                'pin' => 1,
                'hot' => 1,
                'short_description' => 'gfdgfdgfffffffffffffffffffffffffffffffffffffffffffffff
hfyhgfhghfdsfsdfsdfdsasdsa',
                'description' => '<p>dsadadhgf</p>

<p>gfdgfgggggggggggggg</p>

<p>gfdgfdgfdgfdgfdgfdgfd</p>',
                'slug' => 'jadior-size-20-fullbox-so-size-20',
                'created_at' => '2020-07-14 10:35:42',
                'updated_at' => '2020-07-15 07:35:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_name' => 'hgf',
                'image' => 'images/product/159469840611197442.jpeg',
                'image_2' => NULL,
                'category_id' => 2,
                'brand' => 1,
                'supplier' => 1,
                'country_make' => 2,
                'origin_price' => '400000.00',
                'price' => '699000.00',
                'discount' => 2,
                'pin' => 1,
                'hot' => 1,
                'short_description' => 'dsaddsa                                    xcvcx                                    fsfdsdsf
fdsfsd
fsdfsdfsdfsfds',
                'description' => '<p>dsadsa</p>',
                'slug' => 'hgf',
                'created_at' => '2020-07-14 10:35:45',
                'updated_at' => '2020-07-16 19:27:40',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'product_name' => 'jghjhgjghjghjgh',
                'image' => 'images/product/159468918252151321.jpeg',
                'image_2' => NULL,
                'category_id' => 2,
                'brand' => 1,
                'supplier' => 1,
                'country_make' => 2,
                'origin_price' => '3123.00',
                'price' => '555555.00',
                'discount' => 3,
                'pin' => 0,
                'hot' => 1,
                'short_description' => '<p>fsfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffasdsadasdasdsad</p>

<p>dasdasdsdsdasd</p>',
                'description' => '<p>hhhhh</p>',
                'slug' => 'jghjhgjghjghjgh-1',
                'created_at' => '2020-07-14 01:13:02',
                'updated_at' => '2020-07-16 15:24:06',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'product_name' => 'hhhhhhhhhhhhhhhhh',
                'image' => 'images/product/159469841817463980.jpeg',
                'image_2' => NULL,
                'category_id' => 3,
                'brand' => 2,
                'supplier' => 1,
                'country_make' => 2,
                'origin_price' => '444443.00',
                'price' => '49900.00',
                'discount' => 4,
                'pin' => 1,
                'hot' => 1,
                'short_description' => 'dasdasdddddddddddddddddddddddddddddd
dsa                                     dsadddsadddddddddddddd',
                'description' => '<p>gfd</p>',
                'slug' => 'hhhhhhhhhhhhhhhhh-1',
                'created_at' => '2020-07-14 03:40:53',
                'updated_at' => '2020-07-15 14:06:18',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'product_name' => 'fdgfdgfdgd',
                'image' => 'images/product/159470102016118059.jpeg',
                'image_2' => NULL,
                'category_id' => 7,
                'brand' => 2,
                'supplier' => 1,
                'country_make' => 2,
                'origin_price' => '120000.00',
                'price' => '460000.00',
                'discount' => 5,
                'pin' => 1,
                'hot' => 1,
                'short_description' => '<p>dsa</p>',
                'description' => '<p>dsadas</p>',
                'slug' => 'fdgfdgfdgd-1',
                'created_at' => '2020-07-14 04:30:20',
                'updated_at' => '2020-07-14 07:58:16',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'product_name' => 'jkhjk',
                'image' => 'images/product/159471353873373830.jpeg',
                'image_2' => NULL,
                'category_id' => 2,
                'brand' => 1,
                'supplier' => 1,
                'country_make' => 1,
                'origin_price' => '333333.00',
                'price' => '777777.00',
                'discount' => NULL,
                'pin' => 1,
                'hot' => 1,
                'short_description' => 'dsadasdasdsadas   fddsgfdgfsdfsdfsd                         dsadasgfd
jkhkjkhjkjhfdsgfdgfd
fdsfds',
                'description' => '<p>ffsdf</p>',
                'slug' => 'jkhjk',
                'created_at' => '2020-07-14 07:58:58',
                'updated_at' => '2020-07-15 10:48:48',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'product_name' => 'hhhhhhhhhhhhhhh',
                'image' => 'images/product/159478482751304261.jpeg',
                'image_2' => NULL,
                'category_id' => 7,
                'brand' => 2,
                'supplier' => 1,
                'country_make' => 2,
                'origin_price' => '340000.00',
                'price' => '600000.00',
                'discount' => 2,
                'pin' => 1,
                'hot' => 1,
                'short_description' => 'gfdgfd                               <p>ffffffffffffffffffffgfd</p>

<p>gfdgfdgfdgfdgfd</p>',
                'description' => '<p>gfdgdfgfdgfd</p>',
                'slug' => 'hhhhhhhhhhhhhhh',
                'created_at' => '2020-07-15 03:47:07',
                'updated_at' => '2020-07-15 14:05:53',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'product_name' => 'hhhhhhhhhhhhhhh',
                'image' => 'images/product/159478484514773941.jpeg',
                'image_2' => NULL,
                'category_id' => 10,
                'brand' => 2,
                'supplier' => 1,
                'country_make' => 2,
                'origin_price' => '340000.00',
                'price' => '600000.00',
                'discount' => 2,
                'pin' => 1,
                'hot' => 1,
                'short_description' => 'dsad                                               <p>ffffffffffffffffffffgfd</p>

<p>gfdgfdgfdgfd</p>',
                'description' => '<p>gfdgdfgfdgfd</p>',
                'slug' => 'hhhhhhhhhhhhhhh-2',
                'created_at' => '2020-07-15 03:47:25',
                'updated_at' => '2020-07-15 14:05:39',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 18,
                'product_name' => 'hghhhhhhhh',
                'image' => 'images/product/159478534629006479.jpeg',
                'image_2' => NULL,
                'category_id' => 9,
                'brand' => 2,
                'supplier' => 1,
                'country_make' => 2,
                'origin_price' => '2133.00',
                'price' => '555555.00',
                'discount' => 2,
                'pin' => 1,
                'hot' => 1,
                'short_description' => '<p>fdsfdsfds</p>

<p>gfdgfdgfd</p>',
                'description' => '<p>gfdgfdgfdgfd</p>',
                'slug' => 'hghhhhhhhh-4',
                'created_at' => '2020-07-15 03:55:46',
                'updated_at' => '2020-07-15 08:42:32',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 19,
                'product_name' => 'hghhhhhhhh',
                'image' => 'images/product/159478535789210414.jpeg',
                'image_2' => NULL,
                'category_id' => 3,
                'brand' => 2,
                'supplier' => 1,
                'country_make' => 2,
                'origin_price' => '60000.00',
                'price' => '599999.00',
                'discount' => 2,
                'pin' => 1,
                'hot' => 1,
                'short_description' => '<p>fdsfdsfds</p>

<p>gfdgfdgfd</p>',
                'description' => '<p>gfdgfdgfdgfd</p>',
                'slug' => 'hghhhhhhhh-3',
                'created_at' => '2020-07-15 03:55:57',
                'updated_at' => '2020-07-15 11:02:27',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 20,
                'product_name' => 'Áo Chanel',
                'image' => 'images/product/159496958591995067.jpeg',
                'image_2' => NULL,
                'category_id' => 12,
                'brand' => 1,
                'supplier' => 2,
                'country_make' => 2,
                'origin_price' => '400000.00',
                'price' => '11.00',
                'discount' => 2,
                'pin' => 0,
                'hot' => 0,
                'short_description' => 'gfdgfdgfd                                                
gfgfdgfd',
                'description' => '<p>fdgdgfg</p>',
                'slug' => 'ao-chanel',
                'created_at' => '2020-07-17 07:06:25',
                'updated_at' => '2020-07-17 07:06:42',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}