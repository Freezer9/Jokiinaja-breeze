<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'payment_name' => 'QRIS',
                'admin_price' => 2500,
            ],
            [
                'payment_name' => 'BRIVA',
                'admin_price' => 2500,
            ],
            [
                'payment_name' => 'Gopay',
                'admin_price' => 2500,
            ],
            [
                'payment_name' => 'Shopeepay',
                'admin_price' => 2500,
            ],
            [
                'payment_name' => 'OVO',
                'admin_price' => 2500,
            ],
            [
                'payment_name' => 'Dana',
                'admin_price' => 2500,
            ],
            [
                'payment_name' => 'BNI Virtual Account',
                'admin_price' => 2500,
            ],
            [
                'payment_name' => 'BCA Virtual Account',
                'admin_price' => 2500,
            ],
            [
                'payment_name' => 'Mandiri Virtual Account',
                'admin_price' => 2500,
            ],
        ])->each(function ($payment) {
            Payment::create($payment);
        });
    }
}
