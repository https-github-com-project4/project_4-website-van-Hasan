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
            'status' => 'Niet afgerond',
        ]);
        States::create([
            'id' => '2',
            'status' => ' afgerond',
        ]);

        States::create([
            'id' => '3',
            'status' => 'voorbereiding',
        ]);
        States::create([
            'id' => '4',
            'status' => 'in de oven',
        ]);
        States::create([
            'id' => '5',
            'status' => 'onderweg',
        ]);
        States::create([
            'id' => '6',
            'status' => 'bezorged',
        ]);

    }
}
