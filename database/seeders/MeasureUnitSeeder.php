<?php

namespace Database\Seeders;

use App\Models\Measure_unit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeasureUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('measure_units')->insert([
            ['unit' => "unidade"],
            ['unit' => "pacote"],
            ['unit' => "caixa"],
            ['unit' => "litro"],
            ['unit' => "quilo"],
            ['unit' => "frasco"],
            ['unit' => "galão"],
            ['unit' => "envelope"],
            ['unit' => "rolo"],
            ['unit' => "metro"],
            ['unit' => "par"],
            ['unit' => "resma"],
            ['unit' => "kit"]
        ]);
    }
}
