<?php

use Illuminate\Database\Seeder;

class CustomizedOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'customer_name' => 'Nguyễn Đức Âu',
                'gender' => 1,
                'phone_number' => '0377524660',
                'email' => 'mr.au1992@gmail.com',
                'user_id' => 0,
                'customer_id' => 1,
                'city_id' => 1,
                'district_id' => 1,
                'ward_id' => 1,
                'address_shipping' => 'Badsadasdas',
                'note' => 'dasdas1',
                'payment_method' => 1,
                'status' => 1,
                'created_at' => '2020-07-10 15:18:30',
                'updated_at' => '2020-07-10 15:17:33',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 8,
                'customer_name' => 'Nguyễn Doãn Toàn',
                'gender' => 1,
                'phone_number' => '0377524660',
                'email' => 'toan@fsoft.com.vn',
                'user_id' => 0,
                'customer_id' => 12,
                'city_id' => 23,
                'district_id' => 231,
                'ward_id' => 3090,
                'address_shipping' => 'Tòa CIC Tower , Ngõ 219 trung kính , Hà Nội',
                'note' => 'Giao vào giờ hành chính',
                'payment_method' => 1,
                'status' => 1,
                'created_at' => '2020-07-15 23:56:55',
                'updated_at' => '2020-07-15 23:56:55',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 9,
                'customer_name' => 'Nguyễn Đức Âu 222',
                'gender' => 1,
                'phone_number' => '0377524660',
                'email' => 'admin@gmail.com',
                'user_id' => 1,
                'customer_id' => 12,
                'city_id' => 3,
                'district_id' => 21,
                'ward_id' => 221,
                'address_shipping' => 'Tòa CIC Tower , Ngõ 219 trung kính , Hà Nội',
                'note' => 'dddddddddddddddd',
                'payment_method' => 1,
                'status' => 1,
                'created_at' => '2020-07-16 00:26:28',
                'updated_at' => '2020-07-16 00:26:28',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 10,
                'customer_name' => 'Nguyễn Đức Âu 222',
                'gender' => 1,
                'phone_number' => '0377524660',
                'email' => 'admin22@gmail.com',
                'user_id' => 1,
                'customer_id' => 12,
                'city_id' => 3,
                'district_id' => 20,
                'ward_id' => 204,
                'address_shipping' => '219 Trung Kính , Cầu Giấy , Hà Nội',
                'note' => 'ggggggggggggggggggggggggggggggggggg',
                'payment_method' => 1,
                'status' => 1,
                'created_at' => '2020-07-16 07:57:45',
                'updated_at' => '2020-07-16 07:57:45',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 14,
                'customer_name' => 'ggggggggggggg',
                'gender' => 1,
                'phone_number' => '213213123',
                'email' => 'admin@gmail.com',
                'user_id' => 1,
                'customer_id' => 16,
                'city_id' => 2,
                'district_id' => 12,
                'ward_id' => 107,
                'address_shipping' => 'fdsfsdfsdfdsf',
                'note' => 'hhhhhhhhhhhhhh',
                'payment_method' => 2,
                'status' => 1,
                'created_at' => '2020-07-16 08:02:09',
                'updated_at' => '2020-07-16 08:02:09',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 16,
                'customer_name' => 'hgfhghgh',
                'gender' => 1,
                'phone_number' => '123123',
                'email' => 'admin@gmail.com',
                'user_id' => 1,
                'customer_id' => 18,
                'city_id' => 2,
                'district_id' => 12,
                'ward_id' => 106,
                'address_shipping' => 'fdssfffff',
                'note' => 'fdssfsdfsdfsd',
                'payment_method' => 1,
                'status' => 1,
                'created_at' => '2020-07-16 08:08:38',
                'updated_at' => '2020-07-16 08:08:38',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 17,
                'customer_name' => 'Nguyễn Đức Âu 22233333333',
                'gender' => 1,
                'phone_number' => '0377524660',
                'email' => 'au.nguyen@sotatek.com',
                'user_id' => 14,
                'customer_id' => 12,
                'city_id' => 5,
                'district_id' => 39,
                'ward_id' => 526,
                'address_shipping' => 'gggggggggggggggg',
                'note' => 'gfdgfdggggggggggggg',
                'payment_method' => 2,
                'status' => 1,
                'created_at' => '2020-07-16 14:02:23',
                'updated_at' => '2020-07-16 14:02:23',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 18,
                'customer_name' => 'Nguyễn Đức Âu 222',
                'gender' => 1,
                'phone_number' => '0377524660',
                'email' => 'au.nguyen222@sotatek.com',
                'user_id' => 15,
                'customer_id' => 12,
                'city_id' => 1,
                'district_id' => 1,
                'ward_id' => 2,
                'address_shipping' => '219 Trung Kính , Cầu Giấy , Hà Nội',
                'note' => 'fffffffffffffffff',
                'payment_method' => 1,
                'status' => 1,
                'created_at' => '2020-07-17 09:12:50',
                'updated_at' => '2020-07-17 09:12:50',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}