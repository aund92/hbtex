<?php

use Illuminate\Database\Seeder;

class CustomizedDiscountTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('discount')->delete();
        
        \DB::table('discount')->insert(array (
            0 => 
            array (
                'id' => 1,
                'discount_percent' => '5.00',
                'start_date' => '2020-01-01',
                'end_date' => '2020-01-17',
                'created_at' => '2020-07-14 01:44:34',
                'updated_at' => '2020-07-17 01:44:31',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'discount_percent' => '15.00',
                'start_date' => '2020-01-01',
                'end_date' => '2020-07-15',
                'created_at' => '2020-07-14 02:41:33',
                'updated_at' => '2020-07-15 07:50:25',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'discount_percent' => '20.00',
                'start_date' => '2020-01-01',
                'end_date' => '2020-07-15',
                'created_at' => '2020-07-14 02:41:39',
                'updated_at' => '2020-07-15 07:50:20',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'discount_percent' => '10.00',
                'start_date' => '2020-01-01',
                'end_date' => '2020-07-17',
                'created_at' => '2020-07-14 02:41:44',
                'updated_at' => '2020-07-17 01:44:37',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'discount_percent' => '50.00',
                'start_date' => '2020-01-01',
                'end_date' => '2020-07-17',
                'created_at' => '2020-07-14 04:29:28',
                'updated_at' => '2020-07-17 01:44:25',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}