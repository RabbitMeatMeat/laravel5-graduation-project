<?php
/**
 * Created by PhpStorm.
 * User: rabbitmeat
 * Date: 15/5/31
 * Time: 上午3:04
 */
use Illuminate\Database\Seeder;

use App\Mission;

class MissionTableSeeder extends Seeder {

    public function run()
    {
        DB::table('missions')->delete();


    }
}