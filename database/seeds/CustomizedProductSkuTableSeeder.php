<?php

use Illuminate\Database\Seeder;

class CustomizedProductSkuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_sku')->delete();
        
        \DB::table('product_sku')->insert(array (
            0 => 
            array (
                'id' => 5,
                'product_id' => 18,
                'sku_name' => 'Vàng',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-15 03:55:46',
                'updated_at' => '2020-07-15 08:42:32',
                'deleted_at' => '2020-07-15 08:42:32',
            ),
            1 => 
            array (
                'id' => 6,
                'product_id' => 18,
                'sku_name' => 'Đỏ',
                'rgb' => '#FB0000',
                'created_at' => '2020-07-15 03:55:46',
                'updated_at' => '2020-07-15 08:42:32',
                'deleted_at' => '2020-07-15 08:42:32',
            ),
            2 => 
            array (
                'id' => 7,
                'product_id' => 19,
                'sku_name' => 'Vàng',
                'rgb' => '213213',
                'created_at' => '2020-07-15 03:55:57',
                'updated_at' => '2020-07-15 04:48:35',
                'deleted_at' => '2020-07-15 04:48:35',
            ),
            3 => 
            array (
                'id' => 8,
                'product_id' => 19,
                'sku_name' => 'Đỏ',
                'rgb' => 'sfsf',
                'created_at' => '2020-07-15 03:55:57',
                'updated_at' => '2020-07-15 04:48:35',
                'deleted_at' => '2020-07-15 04:48:35',
            ),
            4 => 
            array (
                'id' => 9,
                'product_id' => 19,
                'sku_name' => 'Vàng',
                'rgb' => '213213',
                'created_at' => '2020-07-15 04:48:35',
                'updated_at' => '2020-07-15 04:50:19',
                'deleted_at' => '2020-07-15 04:50:19',
            ),
            5 => 
            array (
                'id' => 10,
                'product_id' => 19,
                'sku_name' => 'Đỏ',
                'rgb' => 'sfsf',
                'created_at' => '2020-07-15 04:48:35',
                'updated_at' => '2020-07-15 04:50:19',
                'deleted_at' => '2020-07-15 04:50:19',
            ),
            6 => 
            array (
                'id' => 11,
                'product_id' => 19,
                'sku_name' => 'Trắng',
                'rgb' => '123',
                'created_at' => '2020-07-15 04:48:35',
                'updated_at' => '2020-07-15 04:50:19',
                'deleted_at' => '2020-07-15 04:50:19',
            ),
            7 => 
            array (
                'id' => 12,
                'product_id' => 19,
                'sku_name' => 'Vàng',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-15 04:50:19',
                'updated_at' => '2020-07-15 11:02:27',
                'deleted_at' => '2020-07-15 11:02:27',
            ),
            8 => 
            array (
                'id' => 13,
                'product_id' => 19,
                'sku_name' => 'Đỏ',
                'rgb' => '#FB0000',
                'created_at' => '2020-07-15 04:50:19',
                'updated_at' => '2020-07-15 11:02:27',
                'deleted_at' => '2020-07-15 11:02:27',
            ),
            9 => 
            array (
                'id' => 14,
                'product_id' => 19,
                'sku_name' => 'Trắng',
                'rgb' => '#F7F7F7',
                'created_at' => '2020-07-15 04:50:19',
                'updated_at' => '2020-07-15 11:02:27',
                'deleted_at' => '2020-07-15 11:02:27',
            ),
            10 => 
            array (
                'id' => 15,
                'product_id' => 1,
                'sku_name' => 'Vàng',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-15 07:21:43',
                'updated_at' => '2020-07-15 07:23:13',
                'deleted_at' => '2020-07-15 07:23:13',
            ),
            11 => 
            array (
                'id' => 16,
                'product_id' => 1,
                'sku_name' => 'Vàng',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-15 07:23:13',
                'updated_at' => '2020-07-15 07:26:02',
                'deleted_at' => '2020-07-15 07:26:02',
            ),
            12 => 
            array (
                'id' => 17,
                'product_id' => 1,
                'sku_name' => 'Vàng',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-15 07:26:02',
                'updated_at' => '2020-07-15 07:35:00',
                'deleted_at' => '2020-07-15 07:35:00',
            ),
            13 => 
            array (
                'id' => 18,
                'product_id' => 1,
                'sku_name' => 'Vàng',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-15 07:35:00',
                'updated_at' => '2020-07-15 07:35:00',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 19,
                'product_id' => 18,
                'sku_name' => 'Vàng',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-15 08:42:32',
                'updated_at' => '2020-07-15 08:42:32',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 20,
                'product_id' => 18,
                'sku_name' => 'Đỏ',
                'rgb' => '#FB0000',
                'created_at' => '2020-07-15 08:42:32',
                'updated_at' => '2020-07-15 08:42:32',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 21,
                'product_id' => 2,
                'sku_name' => 'Vàng',
                'rgb' => '12321',
                'created_at' => '2020-07-15 10:42:32',
                'updated_at' => '2020-07-15 10:46:12',
                'deleted_at' => '2020-07-15 10:46:12',
            ),
            17 => 
            array (
                'id' => 22,
                'product_id' => 2,
                'sku_name' => 'Vàng',
                'rgb' => '12321',
                'created_at' => '2020-07-15 10:46:12',
                'updated_at' => '2020-07-15 10:46:49',
                'deleted_at' => '2020-07-15 10:46:49',
            ),
            18 => 
            array (
                'id' => 23,
                'product_id' => 2,
                'sku_name' => 'Đỏ',
                'rgb' => '43232',
                'created_at' => '2020-07-15 10:46:12',
                'updated_at' => '2020-07-15 10:46:49',
                'deleted_at' => '2020-07-15 10:46:49',
            ),
            19 => 
            array (
                'id' => 24,
                'product_id' => 2,
                'sku_name' => 'Vàng',
                'rgb' => '12321',
                'created_at' => '2020-07-15 10:46:49',
                'updated_at' => '2020-07-15 10:47:16',
                'deleted_at' => '2020-07-15 10:47:16',
            ),
            20 => 
            array (
                'id' => 25,
                'product_id' => 2,
                'sku_name' => 'Đỏ',
                'rgb' => '43232',
                'created_at' => '2020-07-15 10:46:49',
                'updated_at' => '2020-07-15 10:47:16',
                'deleted_at' => '2020-07-15 10:47:16',
            ),
            21 => 
            array (
                'id' => 26,
                'product_id' => 2,
                'sku_name' => 'Vàng',
                'rgb' => '12321',
                'created_at' => '2020-07-15 10:47:16',
                'updated_at' => '2020-07-15 11:03:10',
                'deleted_at' => '2020-07-15 11:03:10',
            ),
            22 => 
            array (
                'id' => 27,
                'product_id' => 2,
                'sku_name' => 'Đỏ',
                'rgb' => '43232',
                'created_at' => '2020-07-15 10:47:16',
                'updated_at' => '2020-07-15 11:03:10',
                'deleted_at' => '2020-07-15 11:03:10',
            ),
            23 => 
            array (
                'id' => 28,
                'product_id' => 6,
                'sku_name' => 'Vàng',
                'rgb' => '32323',
                'created_at' => '2020-07-15 10:48:28',
                'updated_at' => '2020-07-15 10:48:48',
                'deleted_at' => '2020-07-15 10:48:48',
            ),
            24 => 
            array (
                'id' => 29,
                'product_id' => 6,
                'sku_name' => 'Vàng',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-15 10:48:48',
                'updated_at' => '2020-07-16 15:25:58',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 30,
                'product_id' => 19,
                'sku_name' => 'Vàng',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-15 11:02:27',
                'updated_at' => '2020-07-15 11:02:27',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 31,
                'product_id' => 19,
                'sku_name' => 'Đỏ',
                'rgb' => '#FB0000',
                'created_at' => '2020-07-15 11:02:27',
                'updated_at' => '2020-07-15 11:02:27',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 32,
                'product_id' => 19,
                'sku_name' => 'Trắng',
                'rgb' => '#FFFFFF',
                'created_at' => '2020-07-15 11:02:27',
                'updated_at' => '2020-07-16 15:26:19',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 33,
                'product_id' => 2,
                'sku_name' => 'Vàng',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-15 11:03:10',
                'updated_at' => '2020-07-16 19:27:40',
                'deleted_at' => '2020-07-16 19:27:40',
            ),
            29 => 
            array (
                'id' => 34,
                'product_id' => 2,
                'sku_name' => 'Đỏ',
                'rgb' => '#FB0000',
                'created_at' => '2020-07-15 11:03:10',
                'updated_at' => '2020-07-16 19:27:40',
                'deleted_at' => '2020-07-16 19:27:40',
            ),
            30 => 
            array (
                'id' => 35,
                'product_id' => 8,
                'sku_name' => 'Vàng',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-15 14:05:39',
                'updated_at' => '2020-07-16 15:26:01',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 36,
                'product_id' => 7,
                'sku_name' => 'Vang',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-15 14:05:53',
                'updated_at' => '2020-07-16 15:25:56',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 37,
                'product_id' => 4,
                'sku_name' => 'Vàng',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-15 14:06:18',
                'updated_at' => '2020-07-16 15:26:10',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 38,
                'product_id' => 3,
                'sku_name' => 'Nâu',
                'rgb' => '#5F0D0D',
                'created_at' => '2020-07-16 15:24:06',
                'updated_at' => '2020-07-16 15:26:31',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 39,
                'product_id' => 2,
                'sku_name' => 'Vàng',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-16 19:27:40',
                'updated_at' => '2020-07-16 19:27:40',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 40,
                'product_id' => 2,
                'sku_name' => 'Đỏ',
                'rgb' => '#FB0000',
                'created_at' => '2020-07-16 19:27:40',
                'updated_at' => '2020-07-16 19:27:40',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 41,
                'product_id' => 20,
                'sku_name' => 'Vàng',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-17 07:06:25',
                'updated_at' => '2020-07-17 07:06:42',
                'deleted_at' => '2020-07-17 07:06:42',
            ),
            37 => 
            array (
                'id' => 42,
                'product_id' => 20,
                'sku_name' => 'Vàng',
                'rgb' => '#E9F500',
                'created_at' => '2020-07-17 07:06:42',
                'updated_at' => '2020-07-17 07:06:42',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}