<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiftcodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('giftcodes')->insert([
            [
                'id' => 1,
                'code' => 'huymod',
                'item' => '[{"id": 413, "quantity": 40}]',
                'listIdPlayers' => '[]',
                'datecreate' => '2024-11-23',
                'expired' => '2024-11-24',
                'count_left' => 1000,
            ],
        ]);
    }
}
