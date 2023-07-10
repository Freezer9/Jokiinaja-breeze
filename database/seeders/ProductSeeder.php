<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = collect([
            [
                'seller_id' => 1,
                'game_name' => 'Mobile Legends',
                'product_name' => 'Mythical Honor - Mythic Glory',
                'price' => 700000,
            ],
            [
                'seller_id' => 1,
                'game_name' => 'Mobile Legends',
                'product_name' => 'Mythic V - Mythical Honor',
                'price' => 600000,
            ],
            [
                'seller_id' => 1,
                'game_name' => 'Mobile Legends',
                'product_name' => 'Legend V - Mythic V',
                'price' => 500000,
            ],
            [
                'seller_id' => 1,
                'game_name' => 'Mobile Legends',
                'product_name' => 'Epic V - Legend V',
                'price' => 400000,
            ],
            [
                'seller_id' => 1,
                'game_name' => 'Mobile Legends',
                'product_name' => 'Grandmaster V - Epic V',
                'price' => 300000,
            ],
            [
                'seller_id' => 1,
                'game_name' => 'Mobile Legends',
                'product_name' => 'Master IV - Grandmaster V',
                'price' => 200000,
            ],
            [
                'seller_id' => 1,
                'game_name' => 'Mobile Legends',
                'product_name' => 'Elite IV - Master IV',
                'price' => 100000,
            ],
            [
                'seller_id' => 1,
                'game_name' => 'Mobile Legends',
                'product_name' => 'Warrior IV - Elite V',
                'price' => 50000,
            ],
            [
                'seller_id' => 1,
                'game_name' => 'Mobile Legends',
                'product_name' => 'Skin Gojo Satoru',
                'price' => 700000,
            ],
            [
                'seller_id' => 1,
                'game_name' => 'Mobile Legends',
                'product_name' => 'Skin Itadori Yuji',
                'price' => 700000,
            ],
            [
                'seller_id' => 1,
                'game_name' => 'Mobile Legends',
                'product_name' => 'Skin Megumi Fushiguro',
                'price' => 700000,
            ],
            [
                'seller_id' => 1,
                'game_name' => 'Mobile Legends',
                'product_name' => 'Skin Nobara Kugisaki',
                'price' => 700000,
            ],
            [
                'seller_id' => 1,
                'game_name' => 'Apex Legends',
                'product_name' => 'Master - Apex Predator',
                'price' => 1000000,
            ],
            [
                'seller_id' => 1,
                'game_name' => 'PUBG Mobile',
                'product_name' => 'Crown - Ace',
                'price' => 700000,
            ],
            [
                'seller_id' => 1,
                'game_name' => 'CSGO',
                'product_name' => 'SMFC - Global Elite',
                'price' => 1200000,
            ],
            [
                'seller_id' => 2,
                'game_name' => 'Dota 2',
                'product_name' => 'MMR 1386 - MMR 2156',
                'price' => 2000000,
            ],
            [
                'seller_id' => 2,
                'game_name' => 'Fifa 23',
                'product_name' => 'Fifa 2023 FUT',
                'price' => 2000000,
            ],
            [
                'seller_id' => 2,
                'game_name' => 'Freefire',
                'product_name' => 'Diamond - Heroic',
                'price' => 500000,
            ],
            [
                'seller_id' => 2,
                'game_name' => 'Apex Legends Mobile',
                'product_name' => 'Master - Apex Predator',
                'price' => 1000000,
            ],
            [
                'seller_id' => 3,
                'game_name' => 'COD Mobile',
                'product_name' => 'Master - Legendary',
                'price' => 1500000,
            ],
            [
                'seller_id' => 3,
                'game_name' => 'Genshin Impact',
                'product_name' => 'Quest',
                'price' => 10000,
            ],
            [
                'seller_id' => 3,
                'game_name' => 'Clash Of Clans',
                'product_name' => 'Gold 10jt',
                'price' => 30000,
            ],
            [
                'seller_id' => 3,
                'game_name' => 'Clash Royale',
                'product_name' => '1000 Trophies',
                'price' => 20000,
            ],
            [
                'seller_id' => 4,
                'game_name' => 'PUBG',
                'product_name' => 'Ace - Conqueror',
                'price' => 200000,
            ],
            [
                'seller_id' => 4,
                'game_name' => 'GTA V',
                'product_name' => 'Uang 10 Juta',
                'price' => 20000,
            ],
            [
                'seller_id' => 4,
                'game_name' => 'Forza Horizon 4',
                'product_name' => 'Mobil Mclaren Senna',
                'price' => 100000,
            ],
            [
                'seller_id' => 4,
                'game_name' => 'NBA 2k22',
                'product_name' => 'Stephen Curry',
                'price' => 100000,
            ],
            [
                'seller_id' => 4,
                'game_name' => 'Forza Horizon 4',
                'product_name' => 'Mobil Mclaren Senna',
                'price' => 100000,
            ],

        ])->each(function ($product) {
            Product::create($product);
        });
    }
}
