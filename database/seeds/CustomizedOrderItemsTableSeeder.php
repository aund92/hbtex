<?php

use Illuminate\Database\Seeder;

class CustomizedOrderItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_items')->delete();
        
        \DB::table('order_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_id' => 1,
                'product_id' => 1,
                'size_id' => NULL,
                'sku_id' => NULL,
                'price' => '50000.00',
                'quantity' => 2,
                'sub_total' => '100000.00',
                'created_at' => '2020-07-10 15:17:40',
                'updated_at' => '2020-07-10 15:17:42',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'order_id' => 8,
                'product_id' => 1,
                'size_id' => NULL,
                'sku_id' => NULL,
                'price' => '450000.00',
                'quantity' => 5,
                'sub_total' => '2250000.00',
                'created_at' => '2020-07-15 23:56:55',
                'updated_at' => '2020-07-15 23:56:55',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'order_id' => 9,
                'product_id' => 1,
                'size_id' => NULL,
                'sku_id' => NULL,
                'price' => '450000.00',
                'quantity' => 5,
                'sub_total' => '2250000.00',
                'created_at' => '2020-07-16 00:26:28',
                'updated_at' => '2020-07-16 00:26:28',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'order_id' => 9,
                'product_id' => 5,
                'size_id' => NULL,
                'sku_id' => NULL,
                'price' => '230000.00',
                'quantity' => 2,
                'sub_total' => '460000.00',
                'created_at' => '2020-07-16 00:26:28',
                'updated_at' => '2020-07-16 00:26:28',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'order_id' => 10,
                'product_id' => 4,
                'size_id' => NULL,
                'sku_id' => NULL,
                'price' => '44910.00',
                'quantity' => 1,
                'sub_total' => '44910.00',
                'created_at' => '2020-07-16 07:57:45',
                'updated_at' => '2020-07-16 07:57:45',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'order_id' => 10,
                'product_id' => 18,
                'size_id' => NULL,
                'sku_id' => NULL,
                'price' => '472221.75',
                'quantity' => 1,
                'sub_total' => '472221.75',
                'created_at' => '2020-07-16 07:57:45',
                'updated_at' => '2020-07-16 07:57:45',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'order_id' => 10,
                'product_id' => 18,
                'size_id' => NULL,
                'sku_id' => NULL,
                'price' => '472221.75',
                'quantity' => 3,
                'sub_total' => '1416665.25',
                'created_at' => '2020-07-16 07:57:45',
                'updated_at' => '2020-07-16 07:57:45',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'order_id' => 10,
                'product_id' => 18,
                'size_id' => NULL,
                'sku_id' => NULL,
                'price' => '472221.75',
                'quantity' => 4,
                'sub_total' => '1888887.00',
                'created_at' => '2020-07-16 07:57:45',
                'updated_at' => '2020-07-16 07:57:45',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'order_id' => 10,
                'product_id' => 18,
                'size_id' => NULL,
                'sku_id' => NULL,
                'price' => '472221.75',
                'quantity' => 2,
                'sub_total' => '944443.50',
                'created_at' => '2020-07-16 07:57:45',
                'updated_at' => '2020-07-16 07:57:45',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'order_id' => 14,
                'product_id' => 1,
                'size_id' => NULL,
                'sku_id' => NULL,
                'price' => '450000.00',
                'quantity' => 1,
                'sub_total' => '450000.00',
                'created_at' => '2020-07-16 08:02:09',
                'updated_at' => '2020-07-16 08:02:09',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'order_id' => 14,
                'product_id' => 2,
                'size_id' => NULL,
                'sku_id' => NULL,
                'price' => '594150.00',
                'quantity' => 1,
                'sub_total' => '594150.00',
                'created_at' => '2020-07-16 08:02:09',
                'updated_at' => '2020-07-16 08:02:09',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'order_id' => 14,
                'product_id' => 18,
                'size_id' => NULL,
                'sku_id' => NULL,
                'price' => '472221.75',
                'quantity' => 1,
                'sub_total' => '472221.75',
                'created_at' => '2020-07-16 08:02:09',
                'updated_at' => '2020-07-16 08:02:09',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'order_id' => 16,
                'product_id' => 1,
                'size_id' => 0,
                'sku_id' => 18,
                'price' => '450000.00',
                'quantity' => 1,
                'sub_total' => '450000.00',
                'created_at' => '2020-07-16 08:08:38',
                'updated_at' => '2020-07-16 08:08:38',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'order_id' => 16,
                'product_id' => 2,
                'size_id' => 37,
                'sku_id' => 0,
                'price' => '594150.00',
                'quantity' => 1,
                'sub_total' => '594150.00',
                'created_at' => '2020-07-16 08:08:38',
                'updated_at' => '2020-07-16 08:08:38',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'order_id' => 16,
                'product_id' => 18,
                'size_id' => 25,
                'sku_id' => 20,
                'price' => '472221.75',
                'quantity' => 1,
                'sub_total' => '472221.75',
                'created_at' => '2020-07-16 08:08:38',
                'updated_at' => '2020-07-16 08:08:38',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'order_id' => 17,
                'product_id' => 2,
                'size_id' => 37,
                'sku_id' => 0,
                'price' => '594150.00',
                'quantity' => 1,
                'sub_total' => '594150.00',
                'created_at' => '2020-07-16 14:02:23',
                'updated_at' => '2020-07-16 14:02:23',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'order_id' => 17,
                'product_id' => 3,
                'size_id' => 0,
                'sku_id' => 0,
                'price' => '444444.00',
                'quantity' => 1,
                'sub_total' => '444444.00',
                'created_at' => '2020-07-16 14:02:23',
                'updated_at' => '2020-07-16 14:02:23',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'order_id' => 18,
                'product_id' => 2,
                'size_id' => 0,
                'sku_id' => 0,
                'price' => '594150.00',
                'quantity' => 1,
                'sub_total' => '594150.00',
                'created_at' => '2020-07-17 09:12:50',
                'updated_at' => '2020-07-17 09:12:50',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'order_id' => 18,
                'product_id' => 4,
                'size_id' => 0,
                'sku_id' => 0,
                'price' => '44910.00',
                'quantity' => 1,
                'sub_total' => '44910.00',
                'created_at' => '2020-07-17 09:12:50',
                'updated_at' => '2020-07-17 09:12:50',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}