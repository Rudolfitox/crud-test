<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('providers')->insert([
                [
                    'empresa' => 'Gamesa',
                    'rfc' => 'RABATA990011',
                    'telefono' => '1111111111',
                    'domicilio' => 'Direccion gamesa',
                
                ],
                [
                    'empresa' => '11000000',
                    'rfc' => 'LALATA990011',
                    'telefono' => '2222222222',
                    'domicilio' => 'Direccion lala', 
                ],
                [
                    'empresa' => 'Jumex',
                    'rfc' => 'JUGOTA990011',
                    'telefono' => '3333333333',
                    'domicilio' => 'Direccion jumex', 
                ],
                [
                    'empresa' => 'Sabritas',
                    'rfc' => 'BOTATA990011',
                    'telefono' => '4444444444',
                    'domicilio' => 'Direccion sabritas', 
                ],
                [
                    'empresa' => 'Alpura',
                    'rfc' => 'YOGOTA990011',
                    'telefono' => '5555555555',
                    'domicilio' => 'Direccion alpura', 
                ],
                [
                    'empresa' => 'Kelloggs',
                    'rfc' => 'CERETA990011',
                    'telefono' => '6666666666',
                    'domicilio' => 'Domicilio kellggs',
                
                ],
                [
                    'empresa' => 'Tres Estrellas',
                    'rfc' => 'HARITA990011',
                    'telefono' => '7777777777',
                    'domicilio' => 'Domicilio tres estrellas', 
                ],
                [
                    'empresa' => 'Bimbo',
                    'rfc' => 'PANATA990011',
                    'telefono' => '8888888888',
                    'domicilio' => 'Domicilio Bimbo', 
                ],
                [
                    'empresa' => 'Nutrioli',
                    'rfc' => 'ACEITA990011',
                    'telefono' => '9999999999',
                    'domicilio' => 'Domicilio Nutrioli', 
                ],
                [
                    'empresa' => 'Nestle',
                    'rfc' => 'CAFETA990011',
                    'telefono' => '1010101010',
                    'domicilio' => 'Domicilio Nestle', 
                ]
            ]
        );
    }
}
