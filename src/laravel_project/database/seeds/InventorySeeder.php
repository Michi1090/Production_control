<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inventories')->delete();

        $inventories = [
            [
                'product_id' => Product::SEDAN,
                'quantity' => 0,
                'created_at' => new DateTime(),
            ],
            [
                'product_id' => Product::COMPACT_CAR,
                'quantity' => 0,
                'created_at' => new DateTime(),
            ],
            [
                'product_id' => Product::MINI_VAN,
                'quantity' => 0,
                'created_at' => new DateTime(),
            ],
            [
                'product_id' => Product::LIGHT_CAR,
                'quantity' => 0,
                'created_at' => new DateTime(),
            ],
            [
                'product_id' => Product::SUV,
                'quantity' => 0,
                'created_at' => new DateTime(),
            ],
        ];

        DB::table('inventories')->insert($inventories);
    }
}
