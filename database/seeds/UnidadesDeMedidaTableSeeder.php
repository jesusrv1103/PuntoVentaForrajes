<?php

use Illuminate\Database\Seeder;

class UnidadesDeMedidaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidad_de_medidas')->insert(
            [
                [
                    'nombre' => "BULTO DE 5 KG",
                    'descripcion' => "NOGAL",
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'nombre' =>"BULTO DE 40 KG",
                    'descripcion' => Str::random(10) . '@gmail.com',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'nombre' => "BULTO DE 20 KG",
                    'descripcion' => Str::random(10) . '@gmail.com',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
        );
    }
}
