<?php

use Illuminate\Database\Seeder;

use App\Order;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'customer' => 'Test Customer',
            'truck' => 'Example Truck',
            'unitNumber' => 'abc123',
        ]);
    }
}
