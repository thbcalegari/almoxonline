<?php

namespace Database\Seeders;

use App\Models\Purveyor;
use Illuminate\Database\Seeder;

class PurveyorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Purveyor::create([
            'name' => "Coringa Industrial",
            'cnpj' => "1234567890",
            'address' => "Onde Judas perdeu as botas",
            'email' => "joker@coringa.com.br",
            'phone' => "0123456789"
        ]);
    }
}
