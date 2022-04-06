<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = [
            ['name' => 'PHP発動機'],
            ['name' => 'Laravel工業'],
            ['name' => 'Symfonyタイヤ'],
        ];

        DB::table('material_suppliers')->insert($suppliers);
    }
}
