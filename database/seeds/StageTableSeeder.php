<?php

use Illuminate\Database\Seeder;

use App\Stage;

class StageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Stage::class, 15)->create();
    }
}
