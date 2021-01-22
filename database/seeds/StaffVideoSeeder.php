<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff_video')->insert([
            [
                'staff_id' => 2,
                'video_id' => 1
            ],[
                'staff_id' => 3,
                'video_id' => 1
            ],[
                'staff_id' => 2,
                'video_id' => 2
            ],[
                'staff_id' => 3,
                'video_id' => 2
            ],[
                'staff_id' => 2,
                'video_id' => 3
            ],[
                'staff_id' => 2,
                'video_id' => 4
            ],[
                'staff_id' => 2,
                'video_id' => 5
            ],[
                'staff_id' => 2,
                'video_id' => 6
            ],[
                'staff_id' => 2,
                'video_id' => 7
            ],[
                'staff_id' => 2,
                'video_id' => 8
            ],[
                'staff_id' => 2,
                'video_id' => 9
            ]
        ]);
    }
}
