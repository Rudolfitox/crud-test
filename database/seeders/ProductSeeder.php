<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('products')->insert([
            [
                'sku' => '10000000',
                'descripcion' => 'Galletas saladas',
                'cantidad' => '10',
                'precio' => 14.50,
            
            ],
            [
                'sku' => '11000000',
                'descripcion' => 'Leche Deslactosada',
                'cantidad' => '20',
                'precio' => 20.00, 
            ],
            [
                'sku' => '11100000',
                'descripcion' => 'Jugo de litro',
                'cantidad' => '30',
                'precio' => 20.00, 
            ],
            [
                'sku' => '11110000',
                'descripcion' => 'Botana de 250g',
                'cantidad' => '40',
                'precio' => 15.00, 
            ],
            [
                'sku' => '11111000',
                'descripcion' => 'Yogurt',
                'cantidad' => '50',
                'precio' => 12.00, 
            ],
            [
                'sku' => '11111100',
                'descripcion' => 'Cereal 750g',
                'cantidad' => '60',
                'precio' => 50.50,
            
            ],
            [
                'sku' => '11111110',
                'descripcion' => 'Harina para hotcakes de 1kg',
                'cantidad' => '70',
                'precio' => 25.00, 
            ],
            [
                'sku' => '11111111',
                'descripcion' => 'Pan de caja grande',
                'cantidad' => '50',
                'precio' => 35.00, 
            ],
            [
                'sku' => '111111110',
                'descripcion' => 'Aceite comestible de 1Lt',
                'cantidad' => '60',
                'precio' => 30.00, 
            ],
            [
                'sku' => '1111111111',
                'descripcion' => 'Café de grano 750g',
                'cantidad' => '100',
                'precio' => 60.00, 
            ],
        ]
    );
    }
}
