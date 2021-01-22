<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            [
                'name' => 'Dana Spice',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Dana Spice', '-')
            ],[
                'name' => 'MartinaQueen',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('MartinaQueen', '-')
            ],[
                'name' => 'Skin',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Skin', '-')
            ],[
                'name' => 'Dana Ipsum',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Dana Ipsum', '-')
            ],[
                'name' => 'Dana Lorem',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Dana Lorem', '-')
            ],[
                'name' => 'Lorem Ipsum',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Lorem Ipsum', '-')
            ]
        ]);
    }
}
