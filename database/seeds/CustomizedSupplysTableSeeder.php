<?php

use Illuminate\Database\Seeder;

class CustomizedSupplysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('supplys')->delete();
        
        \DB::table('supplys')->insert(array (
            0 => 
            array (
                'id' => 1,
                'supply_name' => 'Phương Béo',
                'email' => 'aasaa@gmail.com',
                'phone_number' => '12313',
                'facebook_url' => 'dsads',
                'address' => 'dsa',
                'description' => 'da',
                'created_at' => NULL,
                'updated_at' => '2020-07-16 16:20:58',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'supply_name' => 'gfdg',
                'email' => 'gfd',
                'phone_number' => 'gf',
                'facebook_url' => 'gf',
                'address' => 'gfd',
                'description' => 'dsadsa                                        
gfdg',
                'created_at' => '2020-07-16 16:21:08',
                'updated_at' => '2020-07-16 16:21:08',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}