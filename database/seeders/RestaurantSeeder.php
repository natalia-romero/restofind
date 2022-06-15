<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->upsert([
            [
                'id' => 1,
                'name' => 'RestoBar'
            ],
            [
                'id' => 2,
                'name' => 'Buffet'
            ],
            [
                'id' => 3,
                'name' => 'Pub'
            ],
            [
                'id' => 4,
                'name' => 'Autor'
            ],
        ],['id'],['name']);
    }
}
