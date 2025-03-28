<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AchievementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('achievements')->insert([
            ['iddb' => 1, 'id' => 1, 'level' => 0, 'description' => 'Bắn hạ 10 phiến quân', 'max' => 10, 'rewardMoney' => 100],
            ['iddb' => 2, 'id' => 1, 'level' => 1, 'description' => 'Bắn hạ 100 phiến quân', 'max' => 100, 'rewardMoney' => 250],
            ['iddb' => 3, 'id' => 1, 'level' => 2, 'description' => 'Bắn hạ 1000 phiến quân', 'max' => 1000, 'rewardMoney' => 500],
            ['iddb' => 4, 'id' => 2, 'level' => 0, 'description' => 'Dùng 100 vật phẩm chiến đấu', 'max' => 100, 'rewardMoney' => 100],
            ['iddb' => 5, 'id' => 2, 'level' => 1, 'description' => 'Dùng 1000 vật phẩm chiến đấu', 'max' => 1000, 'rewardMoney' => 250],
            ['iddb' => 6, 'id' => 2, 'level' => 2, 'description' => 'Dùng 10000 vật phẩm chiến đấu', 'max' => 10000, 'rewardMoney' => 500],
            ['iddb' => 7, 'id' => 3, 'level' => 0, 'description' => 'Bắn 1000 phát', 'max' => 1000, 'rewardMoney' => 100],
            ['iddb' => 8, 'id' => 3, 'level' => 1, 'description' => 'Bắn 10000 phát', 'max' => 10000, 'rewardMoney' => 500],
            ['iddb' => 9, 'id' => 3, 'level' => 2, 'description' => 'Bắn 1000000 phát', 'max' => 100000, 'rewardMoney' => 500],
            ['iddb' => 10, 'id' => 4, 'level' => 0, 'description' => 'Thắng 100 từ 4 người trở lên', 'max' => 100, 'rewardMoney' => 200],
            ['iddb' => 11, 'id' => 4, 'level' => 1, 'description' => 'Thắng 1000 từ 4 người trở lên', 'max' => 1000, 'rewardMoney' => 500],
            ['iddb' => 12, 'id' => 4, 'level' => 2, 'description' => 'Thắng 10000 từ 4 người trở lên', 'max' => 10000, 'rewardMoney' => 1000],
            ['iddb' => 13, 'id' => 5, 'level' => 0, 'description' => 'Hi sinh 10 lần', 'max' => 10, 'rewardMoney' => 250],
            ['iddb' => 14, 'id' => 5, 'level' => 1, 'description' => 'Hi sinh 100 lần', 'max' => 100, 'rewardMoney' => 500],
            ['iddb' => 15, 'id' => 5, 'level' => 2, 'description' => 'Hi sinh 1000 lần', 'max' => 1000, 'rewardMoney' => 1000],
            ['iddb' => 61, 'id' => 6, 'level' => 0, 'description' => 'Đăng Nhập 30 Ngày', 'max' => 30, 'rewardMoney' => 100],
            ['iddb' => 62, 'id' => 6, 'level' => 1, 'description' => 'Đăng Nhập 60 Ngày', 'max' => 60, 'rewardMoney' => 200],
            ['iddb' => 63, 'id' => 6, 'level' => 2, 'description' => 'Đăng Nhập 90 Ngày', 'max' => 90, 'rewardMoney' => 300],
            ['iddb' => 64, 'id' => 7, 'level' => 0, 'description' => 'Nạp 100 ngọc', 'max' => 100, 'rewardMoney' => 100],
            ['iddb' => 65, 'id' => 7, 'level' => 1, 'description' => 'Nạp 1000 ngọc', 'max' => 1000, 'rewardMoney' => 200],
            ['iddb' => 66, 'id' => 7, 'level' => 2, 'description' => 'Nạp 5000 ngọc', 'max' => 5000, 'rewardMoney' => 300],
            ['iddb' => 67, 'id' => 8, 'level' => 0, 'description' => 'Kiếm 100000 điểm kinh nghiệm', 'max' => 100000, 'rewardMoney' => 1000],
            ['iddb' => 68, 'id' => 8, 'level' => 1, 'description' => 'Kiếm 1000000 điểm kinh nghiệm', 'max' => 1000000, 'rewardMoney' => 2000],
            ['iddb' => 69, 'id' => 8, 'level' => 2, 'description' => 'Kiếm 10000000 điểm kinh nghiệm', 'max' => 10000000, 'rewardMoney' => 3000],
            ['iddb' => 70, 'id' => 9, 'level' => 0, 'description' => 'Hạ 3 mục tiêu trong 1 trận 10 lần', 'max' => 10, 'rewardMoney' => 10],
            ['iddb' => 71, 'id' => 9, 'level' => 1, 'description' => 'Hạ 3 mục tiêu trong 1 trận 100 lần', 'max' => 100, 'rewardMoney' => 100],
            ['iddb' => 72, 'id' => 9, 'level' => 2, 'description' => 'Hạ 3 mục tiêu trong 1 trận 1000 lần', 'max' => 1000, 'rewardMoney' => 1000],
            ['iddb' => 73, 'id' => 10, 'level' => 0, 'description' => 'Gỡ thành công 10 quả bom', 'max' => 10, 'rewardMoney' => 10],
            ['iddb' => 74, 'id' => 10, 'level' => 1, 'description' => 'Gỡ thành công 100 quả bom', 'max' => 100, 'rewardMoney' => 100],
            ['iddb' => 75, 'id' => 10, 'level' => 2, 'description' => 'Gỡ thành công 1000 quả bom', 'max' => 1000, 'rewardMoney' => 1000],
            ['iddb' => 76, 'id' => 11, 'level' => 0, 'description' => 'Hạ mục tiêu siêu xa 10 phát', 'max' => 10, 'rewardMoney' => 10],
            ['iddb' => 77, 'id' => 11, 'level' => 1, 'description' => 'Hạ mục tiêu siêu xa 100 phát', 'max' => 100, 'rewardMoney' => 100],
            ['iddb' => 78, 'id' => 11, 'level' => 2, 'description' => 'Hạ mục tiêu siêu xa 1000 phát', 'max' => 1000, 'rewardMoney' => 1000],
            ['iddb' => 79, 'id' => 12, 'level' => 0, 'description' => 'Siêu cao 100 phát', 'max' => 100, 'rewardMoney' => 10],
            ['iddb' => 80, 'id' => 12, 'level' => 1, 'description' => 'Siêu cao 1000 phát', 'max' => 1000, 'rewardMoney' => 100],
            ['iddb' => 81, 'id' => 12, 'level' => 2, 'description' => 'Siêu cao 10000 phát', 'max' => 10000, 'rewardMoney' => 1000],
            ['iddb' => 82, 'id' => 13, 'level' => 0, 'description' => 'Hạ 10 đồng đội', 'max' => 10, 'rewardMoney' => 10],
            ['iddb' => 83, 'id' => 13, 'level' => 1, 'description' => 'Hạ 100 đồng đội', 'max' => 100, 'rewardMoney' => 100],
            ['iddb' => 84, 'id' => 13, 'level' => 2, 'description' => 'Hạ 100 đồng đội', 'max' => 1000, 'rewardMoney' => 1000],
            ['iddb' => 85, 'id' => 14, 'level' => 0, 'description' => 'Hồi sinh 10 đồng đội', 'max' => 10, 'rewardMoney' => 10],
            ['iddb' => 86, 'id' => 14, 'level' => 1, 'description' => 'Hồi sinh 100 đồng đội', 'max' => 100, 'rewardMoney' => 100],
            ['iddb' => 87, 'id' => 14, 'level' => 2, 'description' => 'Hồi sinh 100 đồng đội', 'max' => 1000, 'rewardMoney' => 1000],
            ['iddb' => 88, 'id' => 15, 'level' => 0, 'description' => 'Thắng 100 ván từ 4 người trở lên với vũ khí Avenger', 'max' => 100, 'rewardMoney' => 10],
            ['iddb' => 89, 'id' => 15, 'level' => 1, 'description' => 'Thắng 1000 ván từ 4 người trở lên với vũ khí Avenger', 'max' => 1000, 'rewardMoney' => 100],
            ['iddb' => 90, 'id' => 15, 'level' => 2, 'description' => 'Thắng 10000 ván từ 4 người trở lên với vũ khí Avenger', 'max' => 10000, 'rewardMoney' => 1000],
            ['iddb' => 91, 'id' => 16, 'level' => 0, 'description' => 'Di chuyển hoặc bay xa 1000 mét', 'max' => 1000, 'rewardMoney' => 10],
            ['iddb' => 92, 'id' => 16, 'level' => 1, 'description' => 'Di chuyển hoặc bay xa 10000 mét', 'max' => 10000, 'rewardMoney' => 100],
            ['iddb' => 93, 'id' => 16, 'level' => 2, 'description' => 'Di chuyển hoặc bay xa 100000 mét', 'max' => 100000, 'rewardMoney' => 1000],
            ['iddb' => 94, 'id' => 17, 'level' => 0, 'description' => 'Đăng nhập 90 ngày', 'max' => 90, 'rewardMoney' => 10],
            ['iddb' => 95, 'id' => 17, 'level' => 1, 'description' => 'Đăng nhập 120 ngày', 'max' => 120, 'rewardMoney' => 100],
            ['iddb' => 96, 'id' => 17, 'level' => 2, 'description' => 'Đăng nhập 360 ngày', 'max' => 360, 'rewardMoney' => 1000],
            ['iddb' => 97, 'id' => 18, 'level' => 0, 'description' => 'Thắng cược 10000 vàng', 'max' => 10000, 'rewardMoney' => 10],
            ['iddb' => 98, 'id' => 18, 'level' => 1, 'description' => 'Thắng cược 100000 vàng', 'max' => 100000, 'rewardMoney' => 100],
            ['iddb' => 99, 'id' => 18, 'level' => 2, 'description' => 'Thắng cược 1000000 vàng', 'max' => 1000000, 'rewardMoney' => 1000],
            ['iddb' => 100, 'id' => 19, 'level' => 0, 'description' => 'Cầm hòa 10 ván từ 4 người trở lên', 'max' => 10, 'rewardMoney' => 10],
            ['iddb' => 101, 'id' => 19, 'level' => 1, 'description' => 'Cầm hòa 100 ván từ 4 người trở lên', 'max' => 100, 'rewardMoney' => 100],
            ['iddb' => 102, 'id' => 19, 'level' => 2, 'description' => 'Cầm hòa 1000 ván từ 4 người trở lên', 'max' => 1000, 'rewardMoney' => 1000],
            ['iddb' => 103, 'id' => 20, 'level' => 0, 'description' => 'Kiếm 100000 điểm kinh nghiệm cho biệt đội', 'max' => 100000, 'rewardMoney' => 10],
            ['iddb' => 104, 'id' => 20, 'level' => 1, 'description' => 'Kiếm 1000000 điểm kinh nghiệm cho biệt đội', 'max' => 1000000, 'rewardMoney' => 100],
            ['iddb' => 105, 'id' => 20, 'level' => 2, 'description' => 'Kiếm 10000000 điểm kinh nghiệm cho biệt đội', 'max' => 10000000, 'rewardMoney' => 1000],
        ]);
    }
}
