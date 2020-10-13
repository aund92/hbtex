<?php

use Illuminate\Database\Seeder;

class CustomizedProductImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_images')->delete();
        
        \DB::table('product_images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'image' => 'images/product/159436202252112245.jpeg',
                'created_at' => '2020-07-10 06:20:22',
                'updated_at' => '2020-07-10 07:44:50',
                'deleted_at' => '2020-07-10 07:44:50',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 1,
                'image' => 'images/product/159436202225358937.jpeg',
                'created_at' => '2020-07-10 06:20:22',
                'updated_at' => '2020-07-10 07:44:50',
                'deleted_at' => '2020-07-10 07:44:50',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 1,
                'image' => 'images/product/159436202210334772.jpeg',
                'created_at' => '2020-07-10 06:20:22',
                'updated_at' => '2020-07-10 07:44:50',
                'deleted_at' => '2020-07-10 07:44:50',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 1,
                'image' => 'images/product/159436202254104614.jpeg',
                'created_at' => '2020-07-10 06:20:22',
                'updated_at' => '2020-07-10 07:44:50',
                'deleted_at' => '2020-07-10 07:44:50',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 1,
                'image' => 'images/product/159436709093881986.jpeg',
                'created_at' => '2020-07-10 07:44:50',
                'updated_at' => '2020-07-10 07:44:50',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 1,
                'image' => 'images/product/159436709050244917.jpeg',
                'created_at' => '2020-07-10 07:44:50',
                'updated_at' => '2020-07-10 07:44:50',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 2,
                'image' => 'images/product/159468892142168757.png',
                'created_at' => '2020-07-14 01:08:41',
                'updated_at' => '2020-07-16 19:27:40',
                'deleted_at' => '2020-07-16 19:27:40',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 2,
                'image' => 'images/product/159468892195247963.jpeg',
                'created_at' => '2020-07-14 01:08:41',
                'updated_at' => '2020-07-16 19:27:40',
                'deleted_at' => '2020-07-16 19:27:40',
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 2,
                'image' => 'images/product/159468892113282992.png',
                'created_at' => '2020-07-14 01:08:41',
                'updated_at' => '2020-07-16 19:27:40',
                'deleted_at' => '2020-07-16 19:27:40',
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 3,
                'image' => 'images/product/159468918239357795.jpeg',
                'created_at' => '2020-07-14 01:13:02',
                'updated_at' => '2020-07-15 02:55:53',
                'deleted_at' => '2020-07-15 02:55:53',
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 3,
                'image' => 'images/product/159468918252161115.jpeg',
                'created_at' => '2020-07-14 01:13:02',
                'updated_at' => '2020-07-15 02:55:53',
                'deleted_at' => '2020-07-15 02:55:53',
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 4,
                'image' => 'images/product/159469805343753435.jpeg',
                'created_at' => '2020-07-14 03:40:53',
                'updated_at' => '2020-07-14 03:40:53',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 4,
                'image' => 'images/product/159469805325305853.jpeg',
                'created_at' => '2020-07-14 03:40:53',
                'updated_at' => '2020-07-14 03:40:53',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 5,
                'image' => 'images/product/159470102031303516.jpeg',
                'created_at' => '2020-07-14 04:30:20',
                'updated_at' => '2020-07-14 04:30:20',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 5,
                'image' => 'images/product/159470102013858692.jpeg',
                'created_at' => '2020-07-14 04:30:20',
                'updated_at' => '2020-07-14 04:30:20',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 6,
                'image' => 'images/product/159471353843166685.jpeg',
                'created_at' => '2020-07-14 07:58:58',
                'updated_at' => '2020-07-14 07:58:58',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 6,
                'image' => 'images/product/159471353850045150.jpeg',
                'created_at' => '2020-07-14 07:58:58',
                'updated_at' => '2020-07-14 07:58:58',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 6,
                'image' => 'images/product/159471353848723227.jpeg',
                'created_at' => '2020-07-14 07:58:58',
                'updated_at' => '2020-07-14 07:58:58',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 6,
                'image' => 'images/product/159471353878492677.jpeg',
                'created_at' => '2020-07-14 07:58:58',
                'updated_at' => '2020-07-14 07:58:58',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 3,
                'image' => 'images/product/159478175338568921.jpeg',
                'created_at' => '2020-07-15 02:55:53',
                'updated_at' => '2020-07-15 02:55:53',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 3,
                'image' => 'images/product/159478175381305742.jpeg',
                'created_at' => '2020-07-15 02:55:53',
                'updated_at' => '2020-07-15 02:55:53',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 3,
                'image' => 'images/product/159478175367112704.jpeg',
                'created_at' => '2020-07-15 02:55:53',
                'updated_at' => '2020-07-15 02:55:53',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => 3,
                'image' => 'images/product/159478175310239654.jpeg',
                'created_at' => '2020-07-15 02:55:53',
                'updated_at' => '2020-07-15 02:55:53',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'product_id' => 3,
                'image' => 'images/product/159478175318912322.jpeg',
                'created_at' => '2020-07-15 02:55:53',
                'updated_at' => '2020-07-15 02:55:53',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'product_id' => 18,
                'image' => 'images/product/159478534612704862.jpeg',
                'created_at' => '2020-07-15 03:55:46',
                'updated_at' => '2020-07-15 03:55:46',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'product_id' => 18,
                'image' => 'images/product/159478534687646851.jpeg',
                'created_at' => '2020-07-15 03:55:46',
                'updated_at' => '2020-07-15 03:55:46',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'product_id' => 18,
                'image' => 'images/product/159478534687877169.jpeg',
                'created_at' => '2020-07-15 03:55:46',
                'updated_at' => '2020-07-15 03:55:46',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'product_id' => 19,
                'image' => 'images/product/159478535775132394.jpeg',
                'created_at' => '2020-07-15 03:55:57',
                'updated_at' => '2020-07-15 03:55:57',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'product_id' => 19,
                'image' => 'images/product/159478535744800490.jpeg',
                'created_at' => '2020-07-15 03:55:57',
                'updated_at' => '2020-07-15 03:55:57',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'product_id' => 19,
                'image' => 'images/product/159478535750053813.jpeg',
                'created_at' => '2020-07-15 03:55:57',
                'updated_at' => '2020-07-15 03:55:57',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'product_id' => 2,
                'image' => 'images/product/159492766015450768.jpeg',
                'created_at' => '2020-07-16 19:27:40',
                'updated_at' => '2020-07-16 19:27:40',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'product_id' => 2,
                'image' => 'images/product/15949276606055570.jpeg',
                'created_at' => '2020-07-16 19:27:40',
                'updated_at' => '2020-07-16 19:27:40',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'product_id' => 2,
                'image' => 'images/product/159492766019005792.jpeg',
                'created_at' => '2020-07-16 19:27:40',
                'updated_at' => '2020-07-16 19:27:40',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'product_id' => 20,
                'image' => 'images/product/159496958544054531.jpeg',
                'created_at' => '2020-07-17 07:06:25',
                'updated_at' => '2020-07-17 07:06:25',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'product_id' => 20,
                'image' => 'images/product/159496958529796849.jpeg',
                'created_at' => '2020-07-17 07:06:25',
                'updated_at' => '2020-07-17 07:06:25',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'product_id' => 20,
                'image' => 'images/product/159496958588063454.jpeg',
                'created_at' => '2020-07-17 07:06:25',
                'updated_at' => '2020-07-17 07:06:25',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}