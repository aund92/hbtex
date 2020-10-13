<?php

use Illuminate\Database\Seeder;

class CustomizedCitysTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('citys')->delete();
        
        \DB::table('citys')->insert(array (
            0 => 
            array (
                'id' => 1,
                'city_name' => 'Thành phố Cần Thơ',
                'code' => '92',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'city_name' => 'Tỉnh Bạc Liêu',
                'code' => '95',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'city_name' => 'Tỉnh Bắc Ninh',
                'code' => '27',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'city_name' => 'Tỉnh Bến Tre',
                'code' => '83',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'city_name' => 'Tỉnh Bình Định',
                'code' => '52',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'city_name' => 'Tỉnh Bình Dương',
                'code' => '74',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'city_name' => 'Tỉnh Bình Phước',
                'code' => '70',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'city_name' => 'Tỉnh Bình Thuận',
                'code' => '60',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'city_name' => 'Tỉnh Cà Mau',
                'code' => '96',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'city_name' => 'Tỉnh Cao Bằng',
                'code' => '04',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'city_name' => 'Tỉnh Đắk Lắk',
                'code' => '66',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'city_name' => 'Thành phố Đà Nẵng',
                'code' => '48',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'city_name' => 'Tỉnh Đắk Nông',
                'code' => '67',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'city_name' => 'Tỉnh Điện Biên',
                'code' => '11',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'city_name' => 'Tỉnh Đồng Nai',
                'code' => '75',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'city_name' => 'Tỉnh Đồng Tháp',
                'code' => '87',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'city_name' => 'Tỉnh Gia Lai',
                'code' => '64',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'city_name' => 'Tỉnh Hà Giang',
                'code' => '02',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'city_name' => 'Tỉnh Hà Nam',
                'code' => '35',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'city_name' => 'Tỉnh Hà Tĩnh',
                'code' => '42',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'city_name' => 'Tỉnh Hải Dương',
                'code' => '30',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'city_name' => 'Tỉnh Hậu Giang',
                'code' => '93',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'city_name' => 'Thành phố Hà Nội',
                'code' => '01',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'city_name' => 'Tỉnh Hoà Bình',
                'code' => '17',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'city_name' => 'Tỉnh Hưng Yên',
                'code' => '33',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'city_name' => 'Tỉnh Khánh Hòa',
                'code' => '56',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'city_name' => 'Tỉnh Kiên Giang',
                'code' => '91',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'city_name' => 'Tỉnh Kon Tum',
                'code' => '62',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'city_name' => 'Tỉnh Lai Châu',
                'code' => '12',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'city_name' => 'Tỉnh Lâm Đồng',
                'code' => '68',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'city_name' => 'Tỉnh Lạng Sơn',
                'code' => '20',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'city_name' => 'Tỉnh Lào Cai',
                'code' => '10',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'city_name' => 'Tỉnh Long An',
                'code' => '80',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'city_name' => 'Thành phố Hải Phòng',
                'code' => '31',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'city_name' => 'Tỉnh Nam Định',
                'code' => '36',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'city_name' => 'Tỉnh Nghệ An',
                'code' => '40',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'city_name' => 'Tỉnh Ninh Bình',
                'code' => '37',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'city_name' => 'Tỉnh Ninh Thuận',
                'code' => '58',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'city_name' => 'Tỉnh Phú Thọ',
                'code' => '25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'city_name' => 'Tỉnh Phú Yên',
                'code' => '54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'city_name' => 'Tỉnh Quảng Bình',
                'code' => '44',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'city_name' => 'Tỉnh Quảng Nam',
                'code' => '49',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'city_name' => 'Tỉnh Quảng Ngãi',
                'code' => '51',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'city_name' => 'Tỉnh Quảng Ninh',
                'code' => '22',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'city_name' => 'Thành phố Hồ Chí Minh',
                'code' => '79',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'city_name' => 'Tỉnh Quảng Trị',
                'code' => '45',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'city_name' => 'Tỉnh Sóc Trăng',
                'code' => '94',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'city_name' => 'Tỉnh Sơn La',
                'code' => '14',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'city_name' => 'Tỉnh Tây Ninh',
                'code' => '72',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'city_name' => 'Tỉnh Thái Bình',
                'code' => '34',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'city_name' => 'Tỉnh Thái Nguyên',
                'code' => '19',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'city_name' => 'Tỉnh Thanh Hóa',
                'code' => '38',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'city_name' => 'Tỉnh Thừa Thiên Huế',
                'code' => '46',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'city_name' => 'Tỉnh Tiền Giang',
                'code' => '82',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'city_name' => 'Tỉnh Trà Vinh',
                'code' => '84',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'city_name' => 'Tỉnh An Giang',
                'code' => '89',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'city_name' => 'Tỉnh Tuyên Quang',
                'code' => '08',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'city_name' => 'Tỉnh Vĩnh Long',
                'code' => '86',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'city_name' => 'Tỉnh Vĩnh Phúc',
                'code' => '26',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'city_name' => 'Tỉnh Yên Bái',
                'code' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'city_name' => 'Tỉnh Bà Rịa - Vũng Tàu',
                'code' => '77',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'city_name' => 'Tỉnh Bắc Giang',
                'code' => '24',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'city_name' => 'Tỉnh Bắc Kạn',
                'code' => '06',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}