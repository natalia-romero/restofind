<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class EnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('environments')->upsert([
            [
                'id' => 1,
                'name' => 'Familiar'
            ],
            [
                'id' => 2,
                'name' => 'Nocturno'
            ],
            [
                'id' => 3,
                'name' => 'Romántico'
            ],
            [
                'id' => 4,
                'name' => 'Ejecutivo'
            ],
            
        ],['id'],['name']);
    }
}
