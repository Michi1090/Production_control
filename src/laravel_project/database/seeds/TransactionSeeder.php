<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use App\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->delete();
        $faker = Factory::create('ja_JP');

        for ($i = 0; $i < 50; $i++) {
            Transaction::create([
                'product_id' => $faker->numberBetween(1, 5),
                'date' => $faker->dateTimeBetween('now', '+2 week'),
                'quantity' => $faker->regexify('-?[1-9]'),
                'create_user' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
