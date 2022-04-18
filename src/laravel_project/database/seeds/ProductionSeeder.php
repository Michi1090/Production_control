<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use App\Production;

class ProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productions')->delete();
        $faker = Factory::create('ja_JP');

        for ($i = 0; $i < 30; $i++) {
            Production::create([
                'product_id' => $faker->numberBetween(1, 5),
                'date' => $faker->dateTimeBetween('now', '+2 week'),
                'quantity' => $faker->numberBetween(1, 30),
                'create_user' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
