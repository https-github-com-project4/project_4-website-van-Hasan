<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingredient::create([
            'id' => '1',
            'name' => 'tomaatensaus',
            'price'=> 1.00,
        ]);
        Ingredient::create([
            'id' => '2',
            'name' => 'kaas',
            'price'=> 1.00,
        ]);
        Ingredient::create([
            'id' => '3',
            'name' => 'rode uien',
            'price'=> 0.50,
        ]);
        Ingredient::create([
            'id' => '4',
            'name' => 'paprika',
            'price'=> 0.50,
        ]);
        Ingredient::create([
            'id' => '5',
            'name' => 'champigons',
            'price'=> 0.75,
        ]);
        Ingredient::create([
            'id' => '6',
            'name' => 'kipfilet',
            'price'=> 1.00,
        ]);
        Ingredient::create([
            'id' => '7',
            'name' => 'gehakt',
            'price'=> 1.50,
        ]);
    }
}
