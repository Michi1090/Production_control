<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            [
                'name' => 'test1',
                'email' => 'test1@gmail.com',
                'password' => Hash::make('123456Aa'),
                'created_at' => new DateTime(),
            ],
            [
                'name' => 'test2',
                'email' => 'test2@gmail.com',
                'password' => Hash::make('123456Aa'),
                'created_at' => new DateTime(),
            ],
            [
                'name' => 'test3',
                'email' => 'test3@gmail.com',
                'password' => Hash::make('123456Aa'),
                'created_at' => new DateTime(),
            ],
            [
                'name' => 'test4',
                'email' => 'test4@gmail.com',
                'password' => Hash::make('123456Aa'),
                'created_at' => new DateTime(),
            ],
            [
                'name' => 'test5',
                'email' => 'test5@gmail.com',
                'password' => Hash::make('123456Aa'),
                'created_at' => new DateTime(),
            ],
            [
                'name' => 'test6',
                'email' => 'test6@gmail.com',
                'password' => Hash::make('123456Aa'),
                'created_at' => new DateTime(),
            ],
            [
                'name' => 'test7',
                'email' => 'test7@gmail.com',
                'password' => Hash::make('123456Aa'),
                'created_at' => new DateTime(),
            ],
            [
                'name' => 'test8',
                'email' => 'test8@gmail.com',
                'password' => Hash::make('123456Aa'),
                'created_at' => new DateTime(),
            ],
            [
                'name' => 'test9',
                'email' => 'test9@gmail.com',
                'password' => Hash::make('123456Aa'),
                'created_at' => new DateTime(),
            ],
            [
                'name' => 'test10',
                'email' => 'test10@gmail.com',
                'password' => Hash::make('123456Aa'),
                'created_at' => new DateTime(),
            ],
        ];

        DB::table('users')->insert($params);
    }
}
