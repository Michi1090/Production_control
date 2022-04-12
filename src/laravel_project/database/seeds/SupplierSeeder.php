<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
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

        DB::table('suppliers')->insert($suppliers);
    }
}
