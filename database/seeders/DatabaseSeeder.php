<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminUserSeeder::class,
            UserSeeder::class,
            RoleSeeder::class,
            UserRoleSeeder::class,
            IngredientsSeeder::class,
            EmployeeSeeder::class,
            PizzaSeeder::class,
            CustomerSeeder::class,
            IngredientPizzaSeder::class,
            StatusSeeder::class,

        ]);
        // \App\Models\User::factory(10)->create();
    }
}
