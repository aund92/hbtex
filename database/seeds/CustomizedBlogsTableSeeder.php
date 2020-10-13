<?php

use Illuminate\Database\Seeder;

class CustomizedBlogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blogs')->delete();
        
        \DB::table('blogs')->insert(array (
            0 => 
            array (
                'id' => 3,
                'title' => 'Test ting slug example',
                'short_description' => '<ul>
<li>gfdgfdgfd</li>
<li>ljkljk</li>
<li>;k</li>
<li>53242</li>
<li>534</li>
<li>&nbsp;</li>
</ul>

<p>kghjh</p>

<p>&nbsp;</p>',
                'description' => '<ol>
<li>gfdgfdgfdgfd</li>
<li>khjk</li>
<li>bnm333</li>
<li>65765</li>
<li>887</li>
</ol>',
                'image' => 'images/blog/159469827386705323.jpeg',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-07-14 03:44:33',
                'slug' => 'test-ting-slug-example',
            ),
            1 => 
            array (
                'id' => 4,
                'title' => 'Em đang dùng 11 pro max , mới update lên bản 13.4',
                'short_description' => '<p>ffffffff</p>',
                'description' => '<p>hhhhhhhhh</p>',
                'image' => 'images/blog/159386893798881665.png',
                'category_id' => 1,
                'deleted_at' => '2020-07-04 13:28:49',
                'created_at' => NULL,
                'updated_at' => '2020-07-04 13:28:49',
                'slug' => 'em-dang-dung-11-pro-max-moi-update-len-ban-13-4',
            ),
        ));
        
        
    }
}