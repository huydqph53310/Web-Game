<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('players')->insert([
            [
                'id' => 28,
                'user_id' => 11,
                'name' => 'quocanhdbrr',
                'gold' => 12914885,
                'cup' => 0,
                'gem' => 126230,
                'data' => '{"nHammer":2,"assist":0,"pointAdd":[1000,0,0,0,0,0],"dead":1,"power":100,"busyHammer":0,"kill":100,"trainingSuccess":0,"exp":8599999,"avenger":100,"point":500,"lastlevel":50}',
                'bag' => '[{"quantity":91,"HP":100,"options":[],"index":0,"id":413},{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":1,"id":355},{"quantity":1,"HP":100,"options":[{"param":10,"id":6}],"index":2,"id":344},{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":3,"id":354},{"quantity":1,"HP":100,"options":[{"param":250,"id":1},{"param":250,"id":14}],"index":4,"id":120},{"quantity":1,"HP":100,"options":[{"param":350,"id":1},{"param":295,"id":14},{"param":100,"id":6},{"param":90,"id":26}],"index":5,"id":391},{"quantity":1,"HP":100,"options":[{"param":300,"id":1},{"param":295,"id":14},{"param":100,"id":6},{"param":100,"id":26}],"index":6,"id":398},{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":7,"id":354},{"quantity":1,"HP":100,"options":[{"param":5,"id":6}],"index":8,"id":2},{"quantity":1,"HP":100,"options":[{"param":5,"id":9},{"param":-1,"id":16}],"index":9,"id":6},{"quantity":1,"HP":100,"options":[{"param":700,"id":1},{"param":300,"id":14},{"param":100,"id":6},{"param":100,"id":26}],"index":10,"id":401},{"quantity":1,"HP":100,"options":[{"param":700,"id":1},{"param":300,"id":14},{"param":100,"id":6},{"param":100,"id":26}],"index":11,"id":401},{"quantity":1,"HP":100,"options":[{"param":700,"id":1},{"param":300,"id":14},{"param":100,"id":6},{"param":100,"id":26}],"index":13,"id":401},{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":14,"id":354},{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":15,"id":354},{"quantity":1,"HP":100,"options":[{"param":700,"id":1},{"param":300,"id":14},{"param":100,"id":6},{"param":100,"id":26}],"index":16,"id":401},{"quantity":2,"HP":100,"options":[],"index":17,"id":407},{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":18,"id":354}]',
                'body' => '[{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":0,"id":354},{"quantity":1,"HP":100,"options":[{"param":1200,"id":0},{"param":30,"id":1},{"param":16,"id":2},{"param":20,"id":3},{"param":20,"id":3}],"index":1,"id":14},{"quantity":1,"HP":100,"options":[{"param":1200,"id":0},{"param":30,"id":2},{"param":30,"id":3},{"param":20,"id":4},{"param":40,"id":4}],"index":2,"id":39},{"quantity":1,"HP":100,"options":[{"param":1200,"id":0},{"param":60,"id":3},{"param":30,"id":4},{"param":10,"id":1},{"param":10,"id":1}],"index":3,"id":64},{"quantity":1,"HP":100,"options":[{"param":1200,"id":0},{"param":60,"id":4},{"param":16,"id":1},{"param":10,"id":2},{"param":6,"id":13}],"index":4,"id":89},{"quantity":1,"HP":100,"options":[{"param":390,"id":1},{"param":390,"id":14}],"index":5,"id":144}]',
                'balo' => '[4,-1,-1,-1,-1,-1]',
                'box' => '[{"quantity":1,"HP":100,"options":[{"param":60,"id":1},{"param":30,"id":2},{"param":30,"id":3},{"param":20,"id":4}],"index":0,"id":19},{"quantity":1,"HP":100,"options":[{"param":5,"id":1}],"index":1,"id":15},{"quantity":1,"HP":100,"options":[{"param":5,"id":1}],"index":2,"id":40},{"quantity":1,"HP":100,"options":[{"param":5,"id":1}],"index":3,"id":65},{"quantity":1,"HP":100,"options":[{"param":5,"id":1},{"param":2,"id":13}],"index":4,"id":90},{"quantity":1,"HP":100,"options":[{"param":700,"id":1},{"param":300,"id":14},{"param":100,"id":6},{"param":100,"id":26}],"index":5,"id":401},{"quantity":1,"HP":100,"options":[{"param":350,"id":1},{"param":295,"id":14},{"param":100,"id":6},{"param":90,"id":26}],"index":6,"id":391},{"quantity":98,"HP":100,"options":[],"index":7,"id":413}]',
                'achievement' => '[0,0,0,0,0,0,44199998,380028956,0,0,0,0,0,0,0,0,0,0,0,0]',
                'achievementLevel' => '[1,0,0,0,0,0,3,3,0,0,0,0,0,0,0,0,0,0,0,0]',
                'Friends' => '[1]',
            ],
            [
                'id' => 37,
                'user_id' => 33,
                'name' => 'doquochuy',
                'gold' => 7042184,
                'cup' => 0,
                'gem' => 2901,
                'data' => '{"nHammer":2,"assist":0,"pointAdd":[1000,0,0,0,0,0],"dead":1,"power":100,"busyHammer":0,"kill":0,"trainingSuccess":0,"exp":8599999,"avenger":100,"point":500,"lastlevel":50}',
                'bag' => '[{"quantity":1,"HP":100,"options":[{"param":10,"id":3}],"index":0,"id":25},{"quantity":1,"HP":100,"options":[{"param":5,"id":7}],"index":1,"id":3},{"quantity":1,"HP":100,"options":[{"param":300,"id":1},{"param":295,"id":14},{"param":100,"id":6},{"param":100,"id":26}],"index":2,"id":398},{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":3,"id":355},{"quantity":1,"HP":100,"options":[{"param":700,"id":1},{"param":300,"id":14},{"param":100,"id":6},{"param":100,"id":26}],"index":4,"id":401},{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":5,"id":356},{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":6,"id":354},{"quantity":1,"HP":100,"options":[{"param":1200,"id":0},{"param":30,"id":1},{"param":16,"id":2},{"param":20,"id":3},{"param":20,"id":3},{"param":0,"id":16},{"param":0,"id":16},{"param":0,"id":16}],"index":7,"id":14},{"quantity":1,"HP":100,"options":[{"param":300,"id":1},{"param":295,"id":14},{"param":100,"id":6},{"param":100,"id":26}],"index":8,"id":400},{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":9,"id":355},{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":10,"id":356},{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":11,"id":358},{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":12,"id":359},{"quantity":1,"HP":100,"options":[],"index":16,"id":409},{"quantity":1,"HP":100,"options":[{"param":350,"id":1},{"param":350,"id":14}],"index":17,"id":130}]',
                'body' => '[{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":0,"id":360},{"quantity":1,"HP":100,"options":[{"param":1200,"id":0},{"param":30,"id":1},{"param":16,"id":2},{"param":20,"id":3},{"param":20,"id":3}],"index":1,"id":14},{"quantity":1,"HP":100,"options":[{"param":1200,"id":0},{"param":30,"id":2},{"param":30,"id":3},{"param":20,"id":4},{"param":40,"id":4}],"index":2,"id":39},{"quantity":1,"HP":100,"options":[{"param":1200,"id":0},{"param":60,"id":3},{"param":30,"id":4},{"param":10,"id":1},{"param":10,"id":1}],"index":3,"id":64},{"quantity":1,"HP":100,"options":[{"param":1200,"id":0},{"param":60,"id":4},{"param":16,"id":1},{"param":10,"id":2},{"param":6,"id":13}],"index":4,"id":89},{"quantity":1,"HP":100,"options":[{"param":300,"id":1},{"param":300,"id":14}],"index":5,"id":114}]',
                'balo' => '[-1,-1,-1,-1,-1,-1]',
                'box' => '[{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":0,"id":360},{"quantity":1,"HP":100,"options":[{"param":1200,"id":0},{"param":30,"id":1},{"param":16,"id":2},{"param":20,"id":3},{"param":20,"id":3}],"index":1,"id":14},{"quantity":1,"HP":100,"options":[{"param":700,"id":1},{"param":300,"id":14},{"param":100,"id":6},{"param":100,"id":26}],"index":2,"id":401},{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":3,"id":356},{"quantity":1,"HP":100,"options":[{"param":1,"id":18}],"index":4,"id":363}]',
                'achievement' => '[0,0,0,0,0,0,0,465030000,0,0,0,0,0,0,0,0,0,0,0,0]',
                'achievementLevel' => '[0,0,0,0,0,0,0,3,0,0,0,0,0,0,0,0,0,0,0,0]',
                'Friends' => '[]',
            ],
        ]);
    }
}
