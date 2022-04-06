<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ProductMasterSeeder::class);
        $this->call(MaterialMasterSeeder::class);
        $this->call(MaterialTypeSeeder::class);
    }
}
