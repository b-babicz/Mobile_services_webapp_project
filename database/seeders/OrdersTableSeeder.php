<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userIds = DB::table('users')->where('id', 3)->pluck('id');

        foreach ($userIds as $userId) {
            $orderDate = now()->subDays(rand(1, 30));

            $paymentEndDate = $orderDate->addMonths(rand(1, 12));

            $paymentMethod = ['PaySafeCard', 'PayPal', 'BLIK', 'Bank transfer'][rand(0, 3)];

            $offerId = rand(1, 10);

            DB::table('orders')->insert([
                'user_id' => $userId,
                'order_date' => $orderDate,
                'payment_end_date' => $paymentEndDate,
                'payment_method' => $paymentMethod,
                'offer_id' => $offerId,
            ]);
        }
    }
}
