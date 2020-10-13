<?php

use Illuminate\Database\Seeder;

class CustomizedCustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 12,
                'customer_name' => 'Nguyễn Doãn Toàn',
                'email' => 'toan@fsoft.com.vn',
                'phone_number' => '0377524660',
                'address' => 'Tòa CIC Tower , Ngõ 219 trung kính , Hà Nội',
                'gender' => '1',
                'ward_id' => 3090,
                'district_id' => 231,
                'city_id' => 23,
                'deleted_at' => NULL,
                'created_at' => '2020-07-15 23:56:55',
                'updated_at' => '2020-07-15 23:56:55',
            ),
            1 => 
            array (
                'id' => 16,
                'customer_name' => 'ggggggggggggg',
                'email' => 'admin@gmail.com',
                'phone_number' => '213213123',
                'address' => 'fdsfsdfsdfdsf',
                'gender' => '1',
                'ward_id' => 107,
                'district_id' => 12,
                'city_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2020-07-16 08:02:09',
                'updated_at' => '2020-07-16 08:02:09',
            ),
            2 => 
            array (
                'id' => 18,
                'customer_name' => 'hgfhghgh',
                'email' => 'admin@gmail.com',
                'phone_number' => '123123',
                'address' => 'fdssfffff',
                'gender' => '1',
                'ward_id' => 106,
                'district_id' => 12,
                'city_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2020-07-16 08:08:38',
                'updated_at' => '2020-07-16 08:08:38',
            ),
        ));
        
        
    }
}