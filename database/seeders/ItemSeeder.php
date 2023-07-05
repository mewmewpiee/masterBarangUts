<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [
                'item_code' => 'MNYK01',
                'item_name' => 'Minyak Goreng',
                'item_price' => 40000,
                'item_description' => 'Minyak untuk mengoreng',
                'unit_id' => 3
            ],
            [
                'item_code' => 'LOLI01',
                'item_name' => 'Lolipop',
                'item_price' => 5000,
                'item_description' => 'Permen lolipop dengan berbagai rasa',
                'unit_id' => 4
            ],
            [
                'item_code' => 'SRP01',
                'item_name' => 'Sirup',
                'item_price' => 30000,
                'item_description' => 'Sirup untuk minuman dengan berbagai rasa',
                'unit_id' => 3
            ],
        ]);
    }
}
