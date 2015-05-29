<?php
/**
 * Created by PhpStorm.
 * User: rabbitmeat
 * Date: 15/5/17
 * Time: 下午8:39
 */

use Illuminate\Database\Seeder;

use App\Page;

class PageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('pages')->delete();

        for ($i = 0; $i < 10; $i++) {
            Page::create([
                'title' => 'Title '.$i,
                'slug'  => 'first-page',
                'body'  => 'Body '.$i,
                'user_id' => 1,
            ]);
        }
    }
}