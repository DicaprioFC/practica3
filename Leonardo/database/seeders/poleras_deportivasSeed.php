<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class poleras_deportivasSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();

        $poleras_deportivas = [
            [
                'nombre_jugador' => 'Lionel Messi',
                'marca' => 'Adidas',
                'talla' => 'M',
                'color' => 'Rosa',
                'material' => 'Poliéster',
                'precio' => 89.99,
                'equipo' => 'Inter Miami',
                'estado' => 1
            ],
            [
                'nombre_jugador' => 'Cristiano Ronaldo',
                'marca' => 'Nike',
                'talla' => 'L',
                'color' => 'Amarillo',
                'material' => 'Poliéster',
                'precio' => 94.99,
                'equipo' => 'Al-Nassr',
                'estado' => 1
            ],
            [
                'nombre_jugador' => 'Kylian Mbappé',
                'marca' => 'Nike',
                'talla' => 'M',
                'color' => 'Azul',
                'material' => 'Poliéster',
                'precio' => 99.99,
                'equipo' => 'REAL MADRID',
                'estado' => 1
            ]
            ];
            foreach ($poleras_deportivas as $polera){
                \App\Models\poleras_deportivas::create($polera);
               }
               Model::reguard();
    }
}
