@extends('layout.base')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Order</th>
                <th>Customer</th>
                <th>Work Type</th>
                <th>Work Description</th>
                <th>Bay</th>
                <th>Technician</th>
                <th>Start</th>
                <th>Complete</th>
                <th>Truck</th>
                <th>Unit</th>
                <th>Hours</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stages as $stage)
                <tr>
                    <td>
                        {{ $stage->order->id }}
                        <br>
                        {{ $stage->number }}
                    </td>
                    <td>
                        Customer
                    </td>
                    <td>
                        Work Type
                    </td>
                    <td>
                        Work Description
                    </td>
                    <td>
                        {{ $stage->bay->name }}
                    </td>
                    <td>
                        Technician
                    </td>
                    <td>
                        Start
                    </td>
                    <td>
                        Complete
                    </td>
                    <td>
                        Truck
                    </td>
                    <td>
                        Unit
                    </td>
                    <td>
                        Hours
                    </td>
                    <td>
                        Action
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
