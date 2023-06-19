<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'transaction_id' => 1,
                'transaction_status' => 'Sudah Selesai!',
                'total_amount' => '353408',
                'invoice_name' => 'INV-20230602-MOB-L0H74',
            ],
            [
                'transaction_id' => 2,
                'transaction_status' => 'Dibatalkan!',
                'total_amount' => '102500',
                'invoice_name' => 'INV-20230608-PUB-AI0HW',
            ],
            [
                'transaction_id' => 3,
                'transaction_status' => 'Belum Dibayar',
                'total_amount' => '402500',
                'invoice_name' => 'INV-20230608-MOB-4GTFK',
            ],
            [
                'transaction_id' => 4,
                'transaction_status' => 'Sedang Dikerjakan',
                'total_amount' => '402500',
                'invoice_name' => 'INV-20230608-PUB-QB3FN',
            ],
        ])->each(function ($invoice) {
            Invoice::create($invoice);
        });;
    }
}
