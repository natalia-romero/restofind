<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evaluations')->upsert([
            [
                'id' => 1,
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet semper tellus, quis euismod ligula. Quisque sit amet metus feugiat, rutrum metus ut, placerat nisi. ',
                'score' => 2,
                'restaurant_id' => 1,
                'user_id' => 7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet semper tellus, quis euismod ligula. Quisque sit amet metus feugiat, rutrum metus ut, placerat nisi. ',
                'score' => 1,
                'restaurant_id' => 1,
                'user_id' => 11,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet semper tellus, quis euismod ligula. Quisque sit amet metus feugiat, rutrum metus ut, placerat nisi. ',
                'score' => 3,
                'restaurant_id' => 2,
                'user_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet semper tellus, quis euismod ligula. Quisque sit amet metus feugiat, rutrum metus ut, placerat nisi. ',
                'score' => 5,
                'restaurant_id' => 2,
                'user_id' => 12,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet semper tellus, quis euismod ligula. Quisque sit amet metus feugiat, rutrum metus ut, placerat nisi. ',
                'score' => 3,
                'restaurant_id' => 3,
                'user_id' => 11,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet semper tellus, quis euismod ligula. Quisque sit amet metus feugiat, rutrum metus ut, placerat nisi. ',
                'score' => 4,
                'restaurant_id' => 4,
                'user_id' => 11,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet semper tellus, quis euismod ligula. Quisque sit amet metus feugiat, rutrum metus ut, placerat nisi. ',
                'score' => 5,
                'restaurant_id' => 4,
                'user_id' => 7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet semper tellus, quis euismod ligula. Quisque sit amet metus feugiat, rutrum metus ut, placerat nisi. ',
                'score' => 5,
                'restaurant_id' => 5,
                'user_id' => 11,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet semper tellus, quis euismod ligula. Quisque sit amet metus feugiat, rutrum metus ut, placerat nisi. ',
                'score' => 3,
                'restaurant_id' => 6,
                'user_id' => 12,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet semper tellus, quis euismod ligula. Quisque sit amet metus feugiat, rutrum metus ut, placerat nisi. ',
                'score' => 2,
                'restaurant_id' => 7,
                'user_id' => 7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            

        ],['id'],['review'],['score'],['restaurant_id'],['user_id'],['created_at']);
    }
}
