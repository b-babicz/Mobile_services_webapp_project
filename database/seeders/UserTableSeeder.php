<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jan',
            'surname' => 'Kowalski',
            'email' => 'admin@example.com',
            'password' => Hash::make('zaq1@WSX'),
            'address' => 'Cicha 2',
            'postal_code' => '35-326',
            'city' => 'Rzeszów',
            'role_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Aleksandra',
            'surname' => 'Kwiatkowska',
            'email' => 'kwiatkowska@example.com',
            'password' => Hash::make('zaq1@WSX'),
            'address' => 'Kwiatkowskiego 16c',
            'postal_code' => '35-323',
            'city' => 'Rzeszów',
            'role_id' => 2,
        ]);

        DB::table('users')->insert([
            'name' => 'Ignacy   ',
            'surname' => 'Konieczny',
            'email' => 'koniecznyignas@example.com',
            'password' => Hash::make('zaq1@WSX'),
            'address' => 'Sikorskiego 15',
            'postal_code' => '35-301',
            'city' => 'Rzeszów',
            'role_id' => 2,
        ]);
    }
}
