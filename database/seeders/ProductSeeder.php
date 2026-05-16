<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Product::create(['nombre' => 'Laptop Gamer Pro', 'stock' => 15, 'precio' => 1200.50]);
        \App\Models\Product::create(['nombre' => 'Monitor 4K 27"', 'stock' => 8, 'precio' => 350.00]);
        \App\Models\Product::create(['nombre' => 'Teclado Mecánico RGB', 'stock' => 45, 'precio' => 85.99]);
        \App\Models\Product::create(['nombre' => 'Mouse Ergonómico', 'stock' => 10, 'precio' => 45.00]);
    }
}
