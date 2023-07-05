<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('units')->insert([
            [
                'unit_code' => 'Kg',
                'unit_name' => 'Kilogram'
            ],
            [
                'unit_code' => 'g',
                'unit_name' => 'Gram'
            ],
            [
                'unit_code' => 'L',
                'unit_name' => 'Liter'
            ],
            [
                'unit_code' => 'pcs',
                'unit_name' => 'Pieces'
            ],
            [
                'unit_code' => 'pk',
                'unit_name' => 'Pack'
            ],
        ]);
    }
}
