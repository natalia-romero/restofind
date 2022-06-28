<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class FoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->upsert([
            [
                'id' => 1,
                'name' => 'China'
            ],
            [
                'id' => 2,
                'name' => 'Americana'
            ],
            [
                'id' => 3,
                'name' => 'Chilena'
            ],
            [
                'id' => 4,
                'name' => 'Italiana'
            ],
            [
                'id' => 5,
                'name' => 'Peruana'
            ],
            [
                'id' => 6,
                'name' => 'Internacional'
            ],
        ],['id'],['name']);
    }
}
