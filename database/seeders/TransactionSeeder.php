<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'email' => 'robyanjay@gmail.com',
                'nickname' => 'Robyh',
                'password' => '$2y$10$m8fnfozWoFgYDqFpWP9/lus9nih8/UQ4Zo.NvpdmIkElT2K2TjKY.',
                'notes' => 'minimal pro player',
                'phone_number' => '08192839123',
                'login_via' => 'Google',
                'product_id' => 1,
                'payment_id' => 1,
            ],
            [
                'email' => 'kimipantek@gmail.com',
                'nickname' => 'Kimik',
                'password' => '$2y$10$LU2hQ32TJ/HSj1o3D3dAAe8cNR7r.QNYbK2FG17FBbfu04WCW0.4W',
                'notes' => 'minimal pro fanny',
                'phone_number' => '0812345232',
                'login_via' => 'Moontod',
                'product_id' => 2,
                'payment_id' => 2,
            ],
            [
                'email' => 'freeze@gmail.com',
                'nickname' => 'Freeze',
                'password' => '$2y$10$3uSXZCK1Nw7uZSGutZcddusM7B77nJ6w9IC2FGlhrXhdlYoOS7rKW',
                'notes' => 'minimal pro eudora',
                'phone_number' => '098123210',
                'login_via' => 'Facebook',
                'product_id' => 3,
                'payment_id' => 3,
            ],
            [
                'email' => 'jipeng@gmail.com',
                'nickname' => 'Jipyeong',
                'password' => '$2y$10$3uSXZCK1Nw7uZSGutZcddusM7B77nJ6w9IC2FGlhrXhdlYoOS7rKW',
                'notes' => 'minimal pro arlott',
                'phone_number' => '08984232453',
                'login_via' => 'Biasa',
                'product_id' => 4,
                'payment_id' => 4,
            ],
        ])->each(function ($transaction) {
            Transaction::create($transaction);
        });
    }
}
