<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pack_staff')->insert([
            [
                'staff_id' => 2,
                'pack_id' => 1
            ],[
                'staff_id' => 3,
                'pack_id' => 1
            ],[
                'staff_id' => 2,
                'pack_id' => 2
            ],[
                'staff_id' => 3,
                'pack_id' => 2
            ],[
                'staff_id' => 2,
                'pack_id' => 3
            ],[
                'staff_id' => 3,
                'pack_id' => 3
            ],[
                'staff_id' => 2,
                'pack_id' => 4
            ],[
                'staff_id' => 3,
                'pack_id' => 4
            ]
        ]);
    }
}
