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
        DB::table('time')->insert(
            array(
                array('clock_in' => 'Jorgielyn','clock _out' => 'Librando', 'start' => 'Iran','end' => ''),
            )
        );
    }
}
