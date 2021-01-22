<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'name' => 'amateur',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('amateur', '-')
            ],[
                'name' => 'cosplay',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('cosplay', '-')
            ],[
                'name' => 'chilena',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('chilena', '-')
            ]
        ]);
    }
}
