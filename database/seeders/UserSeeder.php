<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Fulano",
            'email' => "fulano@site.com",
            'password' => '123'                      
        ])->roles()->attach(1);

        User::create([
            'name' => "Cicrano",
            'email' => "cicrano@site.com",
            'password' => '456'                      
        ])->roles()->attach(2);
    }
}
