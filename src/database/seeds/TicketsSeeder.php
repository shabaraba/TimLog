<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            'parent_id' => 0,
            'user_id' => 0,
            'text' => 'test ticket',
            'memo' => '',
            'start_date_time' => '2020-06-01 00:00:00',
            'stop_date_time' => '2020-06-01 01:02:03',
            'deadline_date' => '2020-06-01',
            'deadline_second' => '3600',
            'status' => '0',
            'display_sequence' => '1',
        ]);
        DB::table('tickets')->insert([
            'parent_id' => 0,
            'user_id' => 0,
            'text' => 'test ticket2',
            'memo' => '',
            'start_date_time' => '2020-06-01 00:00:00',
            'stop_date_time' => '2020-06-11 01:02:03',
            'deadline_date' => '2020-07-01',
            'deadline_second' => '7200',
            'status' => '0',
            'display_sequence' => '2',
        ]);
    }
}