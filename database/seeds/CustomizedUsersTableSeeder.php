<?php

use Illuminate\Database\Seeder;

class CustomizedUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Nguyễn Đức Âu',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Tg40k5rjyY3nsSfMMrfNCuir.6NUgnbx3PghjwU8ybyBadsWXJ8Vq',
                'remember_token' => NULL,
                'created_at' => '2020-06-27 12:59:29',
                'updated_at' => '2020-06-27 12:59:29',
                'role' => 'admin',
                'phone_number' => NULL,
                'address' => NULL,
                'gender' => NULL,
            ),
            1 => 
            array (
                'id' => 13,
                'name' => 'Nguyễn Đức Âu 222',
                'email' => 'mr.au1992@gmail.com',
                'email_verified_at' => '2020-07-16 11:12:01',
                'password' => '$2y$10$dQoSmFl1ZYSV8BpGMqwlZO/9wogoQWeS5gt0fnYYGXTASZ8daS8vC',
                'remember_token' => NULL,
                'created_at' => '2020-07-16 11:11:02',
                'updated_at' => '2020-07-16 11:12:01',
                'role' => 'user',
                'phone_number' => NULL,
                'address' => NULL,
                'gender' => NULL,
            ),
            2 => 
            array (
                'id' => 14,
                'name' => 'Au nguyễn 222',
                'email' => 'au.nguyen@sotatek.com',
                'email_verified_at' => '2020-07-16 15:09:25',
                'password' => '$2y$10$10m8IUR1wV73WwZajaKJBOusgBIRry/lqEeWmu546B9tA31Gausly',
                'remember_token' => 'pvPqjbp55VEEyljWLboybjLvMseAkOnJasS36XtMlVVpRPB1xJXXf0eW6gCX',
                'created_at' => '2020-07-16 13:57:48',
                'updated_at' => '2020-07-16 15:18:26',
                'role' => 'user',
                'phone_number' => NULL,
                'address' => NULL,
                'gender' => NULL,
            ),
            3 => 
            array (
                'id' => 15,
                'name' => 'ggggggggg',
                'email' => 'au.nguyen222@sotatek.com',
                'email_verified_at' => '2020-07-17 10:27:24',
                'password' => '$2y$10$ZGuXDfTL5m6BxVcSJgaW4e0TSD693uDirStEmxsvRqkpX86JzTHai',
                'remember_token' => NULL,
                'created_at' => '2020-07-17 03:20:26',
                'updated_at' => '2020-07-17 03:20:26',
                'role' => 'user',
                'phone_number' => NULL,
                'address' => NULL,
                'gender' => NULL,
            ),
        ));
        
        
    }
}