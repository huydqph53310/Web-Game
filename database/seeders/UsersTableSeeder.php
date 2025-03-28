<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 11,
                'username' => 'quoocanhdbrr',
                'password' => '123',
                'ban' => 0,
                'online' => 0,
                'isadmin' => 1,
                'created_at' => '2025-03-21 21:45:29',
            ],
            [
                'id' => 33,
                'username' => 'Admin',
                'password' => '123',
                'ban' => 0,
                'online' => 0,
                'isadmin' => 0,
                'created_at' => '2025-03-21 21:45:29',
            ],
        ]);
    }
}
