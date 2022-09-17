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
        // \App\Models\User::factory(10)->create();

        //$this->call(UserSeeder::class);   Xyz: nome do seeder, criado a partir do artisan.

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CategoriesSeeder::class,
            MeasureUnitSeeder::class,
            StockLevelSeeder::class,
            ManufactorersSeeder::class,
            PurveyorsSeeder::class,
            EstatesSeeder::class,
            CitiesSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
