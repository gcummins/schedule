@extends('layout.base')

@section('content')
    <div class="container-fluid">
        <h1>Service Shop Schedule</h1>
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
                            {{ $stage->order->id }} &middot; Stage {{ $stage->number }}
                        </td>
                        <td>
                            {{ $stage->order->customer }}
                        </td>
                        <td>
                            {{ $stage->work_type }}
                        </td>
                        <td>
                            {{ $stage->description }}
                        </td>
                        <td>
                            {{ $stage->bay->name }}
                        </td>
                        <td>
                            <!-- preferred technicians -->
                        </td>
                        <td>
                            {{ $stage->start }}
                        </td>
                        <td>
                            {{ $stage->complete }}
                        </td>
                        <td>
                            {{ $stage->order->truck }}
                        </td>
                        <td>
                            {{ $stage->order->unitNumber }}
                        </td>
                        <td>
                            {{ $stage->hours }}
                        </td>
                        <td>
                            Action
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
