<?php

namespace Database\Seeders;

use App\Models\Manufactorer;
use Illuminate\Database\Seeder;

class ManufactorersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufactorer::create([
            'name' => "Acme Industries",
            'cnpj' => "1234567890",
            'address' => "Na minha casa que não é, né?",
            'email' => "sac@acme.ind",
            'phone' => "0123456789"
        ]);
    }
}
