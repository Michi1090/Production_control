<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\MaterialMaster;

class ProductMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'セダン',
                'engine_id' => MaterialMaster::ENGINE_3000,
                'engine_per' => 1,
                'airbag_id' => MaterialMaster::AIRBAG_HIGH,
                'airbag_per' => 2,
                'tire_id' => MaterialMaster::TIRE_17,
                'tire_per' => 4,
            ],
            [
                'name' => 'コンパクトカー',
                'engine_id' => MaterialMaster::ENGINE_1200,
                'engine_per' => 1,
                'airbag_id' => MaterialMaster::AIRBAG_NORMAL,
                'airbag_per' => 2,
                'tire_id' => MaterialMaster::TIRE_14,
                'tire_per' => 4,
            ],
            [
                'name' => 'ミニバン',
                'engine_id' => MaterialMaster::ENGINE_2000,
                'engine_per' => 1,
                'airbag_id' => MaterialMaster::AIRBAG_NORMAL,
                'airbag_per' => 2,
                'tire_id' => MaterialMaster::TIRE_15,
                'tire_per' => 4,
            ],
            [
                'name' => '軽自動車',
                'engine_id' => MaterialMaster::ENGINE_660,
                'engine_per' => 1,
                'airbag_id' => MaterialMaster::AIRBAG_NORMAL,
                'airbag_per' => 2,
                'tire_id' => MaterialMaster::TIRE_14,
                'tire_per' => 4,
            ],
            [
                'name' => 'SUV',
                'engine_id' => MaterialMaster::ENGINE_2000,
                'engine_per' => 1,
                'airbag_id' => MaterialMaster::AIRBAG_NORMAL,
                'airbag_per' => 2,
                'tire_id' => MaterialMaster::TIRE_17,
                'tire_per' => 4,
            ],
        ];

        DB::table('product_masters')->insert($products);
    }
}
