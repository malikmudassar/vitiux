<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag_video')->insert([
            [
                'tag_id' => 1,
                'video_id' => 1
            ],[
                'tag_id' => 3,
                'video_id' => 1
            ],[
                'tag_id' => 1,
                'video_id' => 2
            ],[
                'tag_id' => 2,
                'video_id' => 2
            ],[
                'tag_id' => 1,
                'video_id' => 3
            ],[
                'tag_id' => 3,
                'video_id' => 4
            ],[
                'tag_id' => 2,
                'video_id' => 5
            ],[
                'tag_id' => 3,
                'video_id' => 5
            ],[
                'tag_id' => 3,
                'video_id' => 6
            ],[
                'tag_id' => 3,
                'video_id' => 7
            ],[
                'tag_id' => 2,
                'video_id' => 8
            ],[
                'tag_id' => 1,
                'video_id' => 9
            ]
        ]);
    }
}
