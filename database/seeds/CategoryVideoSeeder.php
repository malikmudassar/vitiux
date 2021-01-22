<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_video')->insert([
            [
                'category_id' => 1,
                'video_id' => 1
            ],[
                'category_id' => 3,
                'video_id' => 1
            ],[
                'category_id' => 1,
                'video_id' => 2
            ],[
                'category_id' => 2,
                'video_id' => 2
            ],[
                'category_id' => 3,
                'video_id' => 2
            ]
        ]);
    }
}
