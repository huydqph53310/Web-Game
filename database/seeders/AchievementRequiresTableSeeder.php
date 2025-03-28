<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AchievementRequiresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('achievementrequires')->insert([
            ['id' => 1, 'name' => 'Chính Nghĩa'],
            ['id' => 2, 'name' => 'Chuyên nghiệp'],
            ['id' => 3, 'name' => 'Năng động'],
            ['id' => 4, 'name' => 'Mạnh mẽ'],
            ['id' => 5, 'name' => 'Can đảm'],
            ['id' => 6, 'name' => 'Điểm danh'],
            ['id' => 7, 'name' => 'Đại gia'],
            ['id' => 8, 'name' => 'Kinh nghiệm'],
            ['id' => 9, 'name' => 'Thiện chiến'],
            ['id' => 10, 'name' => 'Khéo tay'],
            ['id' => 11, 'name' => 'Thiện xạ'],
            ['id' => 12, 'name' => 'Cao xạ'],
            ['id' => 13, 'name' => 'Phản bội'],
            ['id' => 14, 'name' => 'Cứu tinh'],
            ['id' => 15, 'name' => 'Siêu anh hùng'],
            ['id' => 16, 'name' => 'Cơ động'],
            ['id' => 17, 'name' => 'Siêu năng'],
            ['id' => 18, 'name' => 'Cao thủ'],
            ['id' => 19, 'name' => 'Cầm hòa'],
            ['id' => 20, 'name' => 'Biệt đội'],
        ]);
    }
}
