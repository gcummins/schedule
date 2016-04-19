<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\Http\Requests;

class OrderController extends Controller
{
    public function show($orderId)
    {
        $order = Order::getFromAcumatica($orderId);
        return view('order.show', compact('order'));
    }
}
