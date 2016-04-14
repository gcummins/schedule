<?php

use Illuminate\Database\Seeder;

use App\Bay;

class BayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bay::create(
            ['name' => '1', 'technicianCount' => 1]
        );

        Bay::create(
            ['name' => '2', 'technicianCount' => 1]
        );
    }
}
