<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'user_id' => 1,
                'full_name' => 'Kimi Reza',
                'phone_number' => '08134131134131',
                'address' => 'Jombang',
                'profile_name' => 'Kimi Elek',
                'profile_description' => 'Pro Player From Jombang Pride',
                'gender' => 'Male',
                'dob' => '2020-01-01',
                'user_type' => 'Platinum',
            ],
            [
                'user_id' => 2,
                'full_name' => 'Roby Arjuna',
                'phone_number' => '0898989898',
                'address' => 'Klaten',
                'profile_name' => 'Rike Ardila',
                'profile_description' => 'Pro Player From Klaten Pride',
                'gender' => 'Male',
                'dob' => '2020-05-29',
                'user_type' => 'Bronze',
            ],
            [
                'user_id' => 3,
                'full_name' => 'Rifqi Rahmadani',
                'phone_number' => '0821321312',
                'address' => 'Gresik',
                'profile_name' => 'Rifqi Korea',
                'profile_description' => 'Pro Player From Gresik Pride',
                'gender' => 'Male',
                'dob' => '2023-06-01',
                'user_type' => 'Silver',
            ],
            [
                'user_id' => 4,
                'full_name' => 'Nando Panjat Pinang',
                'phone_number' => '012321421',
                'address' => 'Bengkalis Riau',
                'profile_name' => 'Nando_0',
                'profile_description' => 'Pro Player From Bengkalis Pride',
                'gender' => 'Male',
                'dob' => '2020-05-15',
                'user_type' => 'Bronze',
            ],
        ])->each(function ($seller) {
            Seller::create($seller);
        });;
    }
}
