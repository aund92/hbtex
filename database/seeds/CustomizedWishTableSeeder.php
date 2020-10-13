<?php

use Illuminate\Database\Seeder;

class CustomizedWishTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wish')->delete();
        
        \DB::table('wish')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => 14,
                'product_id' => 1,
                'size_id' => NULL,
                'sku_id' => NULL,
                'created_at' => '2020-07-17 03:15:09',
                'updated_at' => '2020-07-17 03:15:09',
            ),
            1 => 
            array (
                'id' => 4,
                'user_id' => 14,
                'product_id' => 2,
                'size_id' => NULL,
                'sku_id' => NULL,
                'created_at' => '2020-07-17 03:15:11',
                'updated_at' => '2020-07-17 03:15:11',
            ),
            2 => 
            array (
                'id' => 5,
                'user_id' => 14,
                'product_id' => 3,
                'size_id' => NULL,
                'sku_id' => NULL,
                'created_at' => '2020-07-17 03:15:14',
                'updated_at' => '2020-07-17 03:15:14',
            ),
            3 => 
            array (
                'id' => 6,
                'user_id' => 14,
                'product_id' => 4,
                'size_id' => NULL,
                'sku_id' => NULL,
                'created_at' => '2020-07-17 03:16:33',
                'updated_at' => '2020-07-17 03:16:33',
            ),
            4 => 
            array (
                'id' => 10,
                'user_id' => 15,
                'product_id' => 5,
                'size_id' => NULL,
                'sku_id' => NULL,
                'created_at' => '2020-07-17 03:31:51',
                'updated_at' => '2020-07-17 03:31:51',
            ),
            5 => 
            array (
                'id' => 14,
                'user_id' => 15,
                'product_id' => 1,
                'size_id' => NULL,
                'sku_id' => NULL,
                'created_at' => '2020-07-17 04:11:05',
                'updated_at' => '2020-07-17 04:11:05',
            ),
            6 => 
            array (
                'id' => 15,
                'user_id' => 15,
                'product_id' => 4,
                'size_id' => NULL,
                'sku_id' => NULL,
                'created_at' => '2020-07-17 04:35:42',
                'updated_at' => '2020-07-17 04:35:42',
            ),
        ));
        
        
    }
}