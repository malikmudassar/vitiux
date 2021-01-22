<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pack_video')->insert([
            [
                'pack_id' => 1,
                'video_id' => 1
            ],[
                'pack_id' => 1,
                'video_id' => 2
            ],[
                'pack_id' => 1,
                'video_id' => 3
            ],[
                'pack_id' => 2,
                'video_id' => 1
            ],[
                'pack_id' => 2,
                'video_id' => 2
            ],[
                'pack_id' => 2,
                'video_id' => 3
            ]
        ]);
    }
}
