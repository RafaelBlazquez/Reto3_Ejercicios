<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0;$i<10;$i++){
            DB::table('articulos')->insert([
                'titulo' => $faker->text(50),
                'contenido' => $faker->text(255)
            ]);
        }

        for($i=0;$i<5;$i++){
            DB::table('comentarios')->insert([
                'articulo_id' => 3,
                'comment' => $faker->text(255)
            ]);
        }
    }
}
