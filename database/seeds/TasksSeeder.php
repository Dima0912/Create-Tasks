<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'title' => 'to do',
                'content' => 'контент',
                'created_at' => 2021_12_08,
                'updated_at' => 2021_12_12,
                'creator_id' => 1,
                'status_id' => 1
            ],

            [
                'title' => 'to do',
                'content' => 'контент',
                'created_at' => 2021_12_08,
                'updated_at' => 2021_12_12,
                'creator_id' => 2,
                'status_id' => 2
            ],

        ]);
    }
}
