<?php

use Illuminate\Database\Seeder;

class NamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('names')->insert(
            array(
                array('first_name' => 'Jorgielyn','middle_name' => 'Librando', 'last_name' => 'Iran'),
            )
        );
    }
}
