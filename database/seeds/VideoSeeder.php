<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            [
                'name' => 'Con el vecino de al lado',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Con el vecino de al lado', '-'),
                'featured' => 1,
                'promoted' => 0,
                'boosted' => 0,
                'price' => 2500
            ],[
                'name' => 'Al aire libre',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Al aire libre', '-'),
                'featured' => 0,
                'promoted' => 1,
                'boosted' => 0,
                'price' => 2500
            ],[
                'name' => 'Probando al aire libre',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Probando al aire libre', '-'),
                'featured' => 0,
                'promoted' => 0,
                'boosted' => 1,
                'price' => 2500
            ],[
                'name' => 'Disfrutando mientras hago cosplay',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Disfrutando mientras hago cosplay', '-'),
                'featured' => 0,
                'promoted' => 0,
                'boosted' => 1,
                'price' => 2500
            ],[
                'name' => 'La primera vez',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('La primera vez', '-'),
                'featured' => 0,
                'promoted' => 0,
                'boosted' => 1,
                'price' => 2500
            ],[
                'name' => 'La fantasía de mi pololo',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('La fantasía de mi pololo', '-'),
                'featured' => 0,
                'promoted' => 0,
                'boosted' => 1,
                'price' => 2500
            ],[
                'name' => 'Que no se sepa',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Que no se sepa', '-'),
                'featured' => 0,
                'promoted' => 0,
                'boosted' => 0,
                'price' => 2500
            ],[
                'name' => 'Experimentando con mi amigo',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Experimentando con mi amigo', '-'),
                'featured' => 0,
                'promoted' => 0,
                'boosted' => 0,
                'price' => 2500
            ],[
                'name' => 'Una sesión de fotos muy entretenida',
                'description' => 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.',
                'slug' => Str::slug('Una sesión de fotos muy entretenida', '-'),
                'featured' => 0,
                'promoted' => 0,
                'boosted' => 0,
                'price' => 2500
            ]
        ]);
    }
}
