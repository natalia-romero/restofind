<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->upsert([
            [
                'id' => 1,
                'name' => 'Alta'
            ],
            [
                'id' => 2,
                'name' => 'Media'
            ],
            [
                'id' => 3,
                'name' => 'Baja'
            ],
        ],['id'],['name']);
    }
}
