<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('properties')->insert([
            [
                'title' => 'Casa en la playa',
                'description' => 'Hermosa casa con vista al mar',
                'address' => 'Calle Principal 123',
                'city' => 'Ciudad Costera',
                'price' => 500000,
                'type' => 'casa',
                'status' => 'disponible',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Departamento 5 ambientes',
                'description' => 'Espacioso departamento con vista al parque Centenario',
                'address' => 'Calle falsa 225',
                'city' => 'CABA',
                'price' => 500000,
                'type' => 'departamento',
                'status' => 'disponible',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Monoambiente Luminoso',
                'description' => 'Luminoso monoambiente ubicado en el corazón de Caballito',
                'address' => 'Calle falsa 27',
                'city' => 'CABA',
                'price' => 400000,
                'type' => 'departamento',
                'status' => 'disponible',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}