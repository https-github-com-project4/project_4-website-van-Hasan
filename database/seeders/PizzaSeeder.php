<?php

namespace Database\Seeders;

use App\Models\Pizza;
use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pizza::create([
            'id' => '1',
            'name' => 'Margaritha',

        ]);
        Pizza::create([
            'id' => '2',
            'name' => 'Peperone',

        ]);
        Pizza::create([
            'id' => '3',
            'name' => 'hawaii',

        ]);
        Pizza::create([
            'id' => '4',
            'name' => 'Napolitana',

        ]);
        Pizza::create([
            'id' => '5',
            'name' => 'Funghi',

        ]);
    }
}
