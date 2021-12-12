<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'name' => 'to do',
            'created_at' => 2021_12_08,
            'updated_at' => 2021_12_12,
        ]);

        DB::table('statuses')->insert([
            'name' => 'in progres',
            'created_at' => 2021_12_08,
            'updated_at' => 2021_12_12,
        ]);
        DB::table('statuses')->insert([
            'name' => 'done',
            'created_at' => 2021_12_08,
            'updated_at' => 2021_12_12,
        ]);
}
}