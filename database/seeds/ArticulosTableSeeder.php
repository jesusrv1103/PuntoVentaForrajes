<?php

use Illuminate\Database\Seeder;

class ArticulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('articulos')->insert(
            [
                [
                    'nombre' => $faker->word,
                    'codigo' => $faker->ean13,
                    'stock' => $faker->randomDigit,
                    'imagen' => $faker->randomDigit,
                    'descripcion' => $faker->text,
                    'u_medida_id' => 1,
                    'marca_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nombre' => $faker->word,
                    'codigo' => $faker->ean13,
                    'stock' => $faker->randomDigit,
                    'imagen' => $faker->randomDigit,
                    'descripcion' => $faker->text,
                    'u_medida_id' => 1,
                    'marca_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                
            ]

        );
    }
}
