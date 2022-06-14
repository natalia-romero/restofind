<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->upsert([
            [
                'id' => 1,
                'name' => 'Santiago'
            ],
            [
                'id' => 2,
                'name' => 'La Serena'
            ],
            [
                'id' => 3,
                'name' => 'Valdivia'
            ],
            [
                'id' => 4,
                'name' => 'Valparaíso'
            ],
        ],['id'],['name']);
    }
}
