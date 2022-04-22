<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\MaterialType;
use App\Supplier;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->delete();

        $materials = [
            [
                'name' => 'エンジン 3000cc',
                'type_id' => MaterialType::ENGINE,
                'supplier_id' => Supplier::PHP,
                'price' => 500000,
            ],
            [
                'name' => 'エンジン 2000cc',
                'type_id' => MaterialType::ENGINE,
                'supplier_id' => Supplier::PHP,
                'price' => 400000,
            ],
            [
                'name' => 'エンジン 1200cc',
                'type_id' => MaterialType::ENGINE,
                'supplier_id' => Supplier::PHP,
                'price' => 300000,
            ],
            [
                'name' => 'エンジン 660cc',
                'type_id' => MaterialType::ENGINE,
                'supplier_id' => Supplier::PHP,
                'price' => 200000,
            ],
            [
                'name' => 'エアバッグ ハイグレード',
                'type_id' => MaterialType::AIRBAG,
                'supplier_id' => Supplier::Laravel,
                'price' => 100000,
            ],
            [
                'name' => 'エアバッグ ノーマル',
                'type_id' => MaterialType::AIRBAG,
                'supplier_id' => Supplier::Laravel,
                'price' => 70000,
            ],
            [
                'name' => 'タイヤ 17インチ',
                'type_id' => MaterialType::TIRE,
                'supplier_id' => Supplier::Symfony,
                'price' => 50000,
            ],
            [
                'name' => 'タイヤ 15インチ',
                'type_id' => MaterialType::TIRE,
                'supplier_id' => Supplier::Symfony,
                'price' => 40000,
            ],
            [
                'name' => 'タイヤ 14インチ',
                'type_id' => MaterialType::TIRE,
                'supplier_id' => Supplier::Symfony,
                'price' => 30000,
            ],
        ];

        DB::table('materials')->insert($materials);
    }
}
