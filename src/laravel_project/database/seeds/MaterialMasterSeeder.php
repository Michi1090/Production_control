<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materials = [
            [
                'name' => 'エンジン 3000cc',
                'type_id' => 1,
                'supplier_id' => 1,
                'price' => 500000,
            ],
            [
                'name' => 'エンジン 2000cc',
                'type_id' => 1,
                'supplier_id' => 1,
                'price' => 400000,
            ],
            [
                'name' => 'エンジン 1200cc',
                'type_id' => 1,
                'supplier_id' => 1,
                'price' => 300000,
            ],
            [
                'name' => 'エンジン 660cc',
                'type_id' => 1,
                'supplier_id' => 1,
                'price' => 200000,
            ],
            [
                'name' => 'エアバッグ H',
                'type_id' => 2,
                'supplier_id' => 2,
                'price' => 100000,
            ],
            [
                'name' => 'エアバッグ N',
                'type_id' => 2,
                'supplier_id' => 2,
                'price' => 70000,
            ],
            [
                'name' => 'タイヤ L',
                'type_id' => 3,
                'supplier_id' => 3,
                'price' => 50000,
            ],
            [
                'name' => 'タイヤ M',
                'type_id' => 3,
                'supplier_id' => 3,
                'price' => 40000,
            ],
            [
                'name' => 'タイヤ S',
                'type_id' => 3,
                'supplier_id' => 3,
                'price' => 30000,
            ],
        ];

        DB::table('material_masters')->insert($materials);
    }
}
