<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            DB::table('offers')->insert([
                'product_name' => 'Abonament komórkowy (5G)',
                'monthly_cost' => ($i*10.00) + 50.00 ,
                'additional_cost' => 10.00,
                'internet_package_quantity' => ($i*20),
                'sms_quantity' => 100000,
                'mms_quantity' => 100000,
                'calls_quantity' => 100000,
                'internet_speed' => 1000,
                'roaming_available' => 1,
            ]);
        }

        for ($j = 1; $j <= 3; $j++) {
            DB::table('offers')->insert([
                'product_name' => 'Abonament komórkowy (4G)',
                'monthly_cost' => ($j*10.00) + 15.00 ,
                'additional_cost' => 10.00,
                'internet_package_quantity' => ($j*25),
                'sms_quantity' => 100000,
                'mms_quantity' => 100000,
                'calls_quantity' => 100000,
                'internet_speed' => 360,
                'roaming_available' => 1,
            ]);
        }

        DB::table('offers')->insert([
            'product_name' => 'Internet mobilny (5G)',
            'monthly_cost' => 80.00,
            'additional_cost' => 0.00,
            'internet_package_quantity' => 300,
            'sms_quantity' => 0,
            'mms_quantity' => 0,
            'calls_quantity' => 0,
            'internet_speed' => 1000,
            'roaming_available' => 0,
        ]);

         DB::table('offers')->insert([
            'product_name' => 'Internet mobilny (4G)',
            'monthly_cost' => 60.00,
            'additional_cost' => 0.00,
            'internet_package_quantity' => 300,
            'sms_quantity' => 0,
            'mms_quantity' => 0,
            'calls_quantity' => 0,
            'internet_speed' => 360,
            'roaming_available' => 0,
        ]);

        for ($i = 1; $i <= 3; $i++) {
            DB::table('offers')->insert([
                'product_name' => 'Światłowód',
                'monthly_cost' => ($i*40.00)+25.00,
                'additional_cost' => 0.00,
                'internet_package_quantity' => 100000,
                'sms_quantity' => 0,
                'mms_quantity' => 0,
                'calls_quantity' => 0,
                'internet_speed' => + ($i * 100) + 700,
                'roaming_available' => 0,
            ]);
        }
    }
}
