<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(Roles::class);
        $this->call(UserTableSeeder::class);
        $this->call(OffersTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
    }
}
