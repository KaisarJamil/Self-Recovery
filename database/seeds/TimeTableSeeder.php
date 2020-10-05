<?php

use Illuminate\Database\Seeder;

class TimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('times')->insert([
            'time'=>'10:00 pm'
        ]);
        DB::table('times')->insert([
            'time'=>'12:30 pm'
        ]);
        DB::table('times')->insert([
            'time'=>'4:00 pm'
        ]);
    }
}
