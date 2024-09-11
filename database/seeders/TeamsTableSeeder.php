<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            ['name' => 'EST'],
            ['name' => 'USMO'],
            ['name' => 'SN'],
            ['name' => 'JSK'],
            ['name' => 'CA'],
            ['name' => 'ESG'],
            ['name' => 'JSM'],
            ['name' => 'ESS'],
            ['name' => 'DSG'],
            ['name' => 'EZS'],
        ];

        foreach ($teams as $team) {
            DB::table('teams')->insert($team);
        }
    }
}
