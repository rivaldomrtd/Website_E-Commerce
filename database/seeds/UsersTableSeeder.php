<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Rivaldo Marta Dinata (1461900135)',
                'email' => 'comsystemprogram@gmail.com',
                'password' => Hash::make('admin'),
                'role' => 'Admin'
            ],
            [
                'id' => 2,
                'name' => 'Rivaldo',
                'email' => 'rivaldo@gmail.com',
                'password' => Hash::make('rivaldo'),
                'role' => 'Customer'
            ],
            [
                'id' => 3,
                'name' => 'Marta',
                'email' => 'marta@gmail.com',
                'password' => Hash::make('marta'),
                'role' => 'Customer'
            ],
            [
                'id' => 4,
                'name' => 'Dinata',
                'email' => 'dinata@gmail.com',
                'password' => Hash::make('1461900135'),
                'role' => 'Customer'
            ],
        ]);
    }
}
