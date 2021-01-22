<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packs')->insert([
            [
                'name' => 'Martina Queen en casa',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Martina Queen en casa', '-'),
                'featured' => 0,
                'promoted' => 0,
                'price' => 3000
            ],[
                'name' => 'Martina Queen en el trabajo',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Martina Queen en el trabajo', '-'),
                'featured' => 0,
                'promoted' => 0,
                'price' => 3000
            ],[
                'name' => 'Martina Queen en el patio',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Martina Queen en el patio', '-'),
                'featured' => 0,
                'promoted' => 0,
                'price' => 3000
            ],[
                'name' => 'Martina Queen en la playa',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Martina Queen en el playa', '-'),
                'featured' => 0,
                'promoted' => 0,
                'price' => 3000
            ]
        ]);
    }
}
