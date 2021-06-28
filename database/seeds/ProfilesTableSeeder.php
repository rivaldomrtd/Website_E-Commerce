<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'phonenumber' => '0895605882133',
                'country' => 'Indonesia',
                'city' => 'Surabaya',
                'address' => 'Karanganyar 123',
                'zipcode' => 60229
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'phonenumber' => '08215551234',
                'country' => 'Indonesia',
                'city' => 'Surabaya',
                'address' => 'KaranganyarToba',
                'zipcode' => 60228
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'phonenumber' => '086429125345',
                'country' => 'Indonesia',
                'city' => 'Surabaya',
                'address' => 'Karanganyar 17',
                'zipcode' => 60226
            ],
            [
                'id' => 4,
                'user_id' => 4,
                'phonenumber' => '083291232545',
                'country' => 'Indonesia',
                'city' => 'Surabaya',
                'address' => 'Karanganyar 23a',
                'zipcode' => 60223
            ],

        ]);
    }
}
