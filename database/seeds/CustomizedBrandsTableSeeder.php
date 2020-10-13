<?php

use Illuminate\Database\Seeder;

class CustomizedBrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'brand_name' => 'Dior',
                'image' => 'images/brand/159388019756379704.jpeg',
                'description' => '<p>Đến Từ trung&nbsp;quốc</p>',
                'slug' => 'dior',
                'created_at' => NULL,
                'updated_at' => '2020-07-10 06:27:27',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'brand_name' => 'Chanel',
                'image' => 'images/brand/159388020893721687.jpeg',
                'description' => '<p>fffffffffffff</p>',
                'slug' => 'chanel',
                'created_at' => NULL,
                'updated_at' => '2020-07-10 06:27:31',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}