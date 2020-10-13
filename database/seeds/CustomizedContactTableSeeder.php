<?php

use Illuminate\Database\Seeder;

class CustomizedContactTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact')->delete();
        
        \DB::table('contact')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Nguyễn Đức Âu 222',
                'email' => 'au.nguyen@sotatek.com',
                'phone_number' => '0377524660',
                'subject' => 'fdssf',
                'message' => 'ffffffffffff',
                'created_at' => '2020-07-17 07:36:05',
                'updated_at' => '2020-07-17 07:36:05',
            ),
        ));
        
        
    }
}