<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisements')->insert([
            [
                'text' => 'Aprovecha tus videos favoritos a sólo $9.000',
                'url' => 'google.cl'
            ],[
                'text' => 'Aprovecha tus facebook favoritos a sólo $9.000',
                'url' => 'facebook.com'
            ],[
                'text' => 'Aprovecha tus youtube favoritos a sólo $9.000',
                'url' => 'youtube.com'
            ]
        ]);
    }
}
