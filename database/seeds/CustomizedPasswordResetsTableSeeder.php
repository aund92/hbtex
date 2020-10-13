<?php

use Illuminate\Database\Seeder;

class CustomizedPasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('password_resets')->delete();
        
        \DB::table('password_resets')->insert(array (
            0 => 
            array (
                'email' => 'au.nguyen@sotatek.com',
                'token' => '$2y$10$J43UrCm/ApqxwY1m7BWFrOe5oObZPhpVGp0CFshV7EOQ/5e0q.5q.',
                'created_at' => '2020-07-16 15:18:33',
            ),
        ));
        
        
    }
}