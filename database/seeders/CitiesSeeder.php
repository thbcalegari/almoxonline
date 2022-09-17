<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'name' => "Abacate da Pedreira (Macapá)",
            'estate_id' => 4,
            'ibge_code' => 1600550,
            'ddd' => '96'
        ]);
    }
}
