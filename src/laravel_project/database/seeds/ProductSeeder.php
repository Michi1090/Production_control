<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Material;

class ProductSeeder extends Seeder
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
                'engine_id' => Material::ENGINE_3000,
                'engine_per' => 1,
                'airbag_id' => Material::AIRBAG_HIGH,
                'airbag_per' => 2,
                'tire_id' => Material::TIRE_17,
                'tire_per' => 4,
            ],
            [
                'name' => 'コンパクトカー',
                'engine_id' => Material::ENGINE_1200,
                'engine_per' => 1,
                'airbag_id' => Material::AIRBAG_NORMAL,
                'airbag_per' => 2,
                'tire_id' => Material::TIRE_14,
                'tire_per' => 4,
            ],
            [
                'name' => 'ミニバン',
                'engine_id' => Material::ENGINE_2000,
                'engine_per' => 1,
                'airbag_id' => Material::AIRBAG_NORMAL,
                'airbag_per' => 2,
                'tire_id' => Material::TIRE_15,
                'tire_per' => 4,
            ],
            [
                'name' => '軽自動車',
                'engine_id' => Material::ENGINE_660,
                'engine_per' => 1,
                'airbag_id' => Material::AIRBAG_NORMAL,
                'airbag_per' => 2,
                'tire_id' => Material::TIRE_14,
                'tire_per' => 4,
            ],
            [
                'name' => 'SUV',
                'engine_id' => Material::ENGINE_2000,
                'engine_per' => 1,
                'airbag_id' => Material::AIRBAG_NORMAL,
                'airbag_per' => 2,
                'tire_id' => Material::TIRE_17,
                'tire_per' => 4,
            ],
        ];

        DB::table('products')->insert($products);
    }
}
