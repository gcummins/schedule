@extends('layout.base')

@section('content')
    <div class="container">
        <h2>Order {{ $order->unitNumber }}</h2>

        <p>Order Number: {{ $order->unitNumber }}</p>
        <p>Customer: {{ $order->customer }}</p>
        <p>Truck: {{ $order->truck }}</p>
    </div>
@endsection
