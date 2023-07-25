<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['id' => 1, 'name' => 'admin'],
            ['id' => 2, 'name' => 'użytkownik'],
            ['id' => 3, 'name' => 'klient'],
        ];

        DB::table('roles')->insert($roles);
    }
}
