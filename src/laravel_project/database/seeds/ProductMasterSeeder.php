<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_masters = [
            [
                'name' => 'セダン',
                'engine_id' => 1,
                'engine_per' => 1,
                'airbag_id' => 1,
                'airbag_per' => 2,
                'tire_id' => 1,
                'tire_per' => 4,
            ],
            [
                'name' => 'コンパクトカー',
                'engine_id' => 1,
                'engine_per' => 1,
                'airbag_id' => 1,
                'airbag_per' => 2,
                'tire_id' => 1,
                'tire_per' => 4,
            ],
            [
                'name' => 'ミニバン',
                'engine_id' => 1,
                'engine_per' => 1,
                'airbag_id' => 1,
                'airbag_per' => 2,
                'tire_id' => 1,
                'tire_per' => 4,
            ],
            [
                'name' => '軽自動車',
                'engine_id' => 1,
                'engine_per' => 1,
                'airbag_id' => 1,
                'airbag_per' => 2,
                'tire_id' => 1,
                'tire_per' => 4,
            ],
            [
                'name' => 'SUV',
                'engine_id' => 1,
                'engine_per' => 1,
                'airbag_id' => 1,
                'airbag_per' => 2,
                'tire_id' => 1,
                'tire_per' => 4,
            ],
        ];

        DB::table('product_masters')->insert($product_masters);
    }
}
