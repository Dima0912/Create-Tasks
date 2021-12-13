<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('labels')->insert([
            ['name' => 'bug',
            'color' => 'blue',
            'created_at' => 2021_12_08,
            'updated_at' => 2021_12_13],

            ['name' => 'feature',
            'color' => 'black',
            'created_at' => 2021_12_08,
            'updated_at' => 2021_12_13],

            ['name' => 'urgent',
            'color' => 'green',
            'created_at' => 2021_12_08,
            'updated_at' => 2021_12_13],
        ]);

       
    }
}
