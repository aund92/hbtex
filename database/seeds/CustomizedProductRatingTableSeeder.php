<?php

use Illuminate\Database\Seeder;

class CustomizedProductRatingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_rating')->delete();
        
        \DB::table('product_rating')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 14,
                'product_id' => 2,
                'rating' => 5,
                'message' => 'gggggggggggggggggggggggggg',
                'created_at' => '2020-07-16 19:56:28',
                'updated_at' => '2020-07-16 19:56:28',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'product_id' => 2,
                'rating' => 3,
                'message' => 'gfgfdgfdgfd',
                'created_at' => '2020-07-16 19:56:28',
                'updated_at' => '2020-07-16 19:56:28',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'product_id' => 2,
                'rating' => 4,
                'message' => 'hghgfhgfhgfhgf',
                'created_at' => '2020-07-16 19:56:28',
                'updated_at' => '2020-07-16 19:56:28',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 14,
                'product_id' => 6,
                'rating' => 1,
                'message' => 'hgfhgfhf',
                'created_at' => '2020-07-16 20:18:54',
                'updated_at' => '2020-07-16 20:18:54',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 14,
                'product_id' => 6,
                'rating' => 5,
                'message' => 'rffffffffffffffffff',
                'created_at' => '2020-07-16 20:19:08',
                'updated_at' => '2020-07-16 20:19:08',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 14,
                'product_id' => 1,
                'rating' => 3,
                'message' => 'gggggggggggggggggggggggggggggg',
                'created_at' => '2020-07-16 20:25:59',
                'updated_at' => '2020-07-16 20:25:59',
            ),
        ));
        
        
    }
}