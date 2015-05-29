<?php
/**
 * Created by PhpStorm.
 * User: rabbitmeat
 * Date: 15/5/17
 * Time: 下午8:39
 */

use Illuminate\Database\Seeder;

use App\Article;

class ArticleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('articles')->delete();

        for ($i = 0; $i < 10; $i++) {
            Article::create([
                'title' => 'Title '.$i,
                'slug'  => 'first-page',
                'body'  => 'Body '.$i,
                'user_id' => 1,
                'image' => 'lalala',
            ]);
        }
    }
}