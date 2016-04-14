@extends('layout.base')

@section('content')
    <h2>Create a Bay</h2>

    <form action="{{ route('bay.store') }}" method="post" charset='utf-8'>
        {{ csrf_field() }}

        <label for="input-name">Bay name</label>
        <input type="text" name="name" id="input-name">

        <label for="input-technicianCount">Technician Count</label>
        <input type="number" name="technicianCount" id="input-technicianCount">

        <button type="submit">Save</button>
    </form>
@endsection
