<?php

namespace Database\Seeders;

use App\Models\Stock_level;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stock_levels')->insert(
            [
                ['level' => "Zero"],
                ['level' => "Crítico"],
                ['level' => "Atenção"],
                ['level' => "Mínimo"],
                ['level' => "Razoável"],
                ['level' => "Bom"],
                ['level' => "Máximo"]
            ]
        );
    }
}
