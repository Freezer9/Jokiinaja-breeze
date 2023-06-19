<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'complaint_type' => 'Terlambat',
                'phone_number' => '0802138012',
                'invoice_name' => 'INV-20230602-MOB-L0H74',
                'complaint_details' => 'Terlambat dari Estimasi Waktu',
                'email' => 'rifqi@gmail.com'
            ],
            [
                'complaint_type' => 'Terlambat',
                'phone_number' => '0812121212',
                'invoice_name' => 'INV-20230606-DOT-MAT26',
                'complaint_details' => 'Terlambat dari Estimasi Waktu',
                'email' => 'testing@gmail.com'
            ],
        ])->each(function ($contact) {
            Contact::create($contact);
        });;
    }
}
