<?php

use Illuminate\Database\Seeder;





class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('marcas')->insert(
            [
                [
                  
                    'nombre' => "PURINA",
                    'descripcion' => $faker->text,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                  
                    'nombre' => "NOGAL",
                    'descripcion' =>  $faker->text,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'nombre' => "ARANDAS",
                    'descripcion' => $faker->text,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]

        );
    }
}
