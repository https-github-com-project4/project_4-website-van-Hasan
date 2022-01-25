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
            'price'=>'6.50'

        ]);
        Pizza::create([
            'id' => '2',
            'name' => 'Peperone',
            'price'=>'8.50'

        ]);
        Pizza::create([
            'id' => '3',
            'name' => 'hawaii',
            'price'=>'9.00'

        ]);
        Pizza::create([
            'id' => '4',
            'name' => 'Napolitana',
            'price'=>'11.50'

        ]);
        Pizza::create([
            'id' => '5',
            'name' => 'Funghi',
            'price'=>'9.50'

        ]);
    }
}
