<?php

namespace Database\Seeders;
use App\Models\Role;
use App\Models\States;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        States::create([
            'id' => '1',
            'name' => 'Niet afgerond',
        ]);
        States::create([
            'id' => '2',
            'name' => ' afgerond',
        ]);

        States::create([
            'id' => '3',
            'name' => 'voorbereiding',
        ]);
        States::create([
            'id' => '4',
            'name' => 'in de oven',
        ]);
        States::create([
            'id' => '5',
            'name' => 'onderweg',
        ]);
        States::create([
            'id' => '6',
            'name' => 'bezorged',
        ]);

    }
}
