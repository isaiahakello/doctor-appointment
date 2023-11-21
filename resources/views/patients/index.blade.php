@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Patients</h1>
        <a href="{{ route('patients.create') }}">Add New Patient</a>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Actions</th>
            </tr>
            @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
                    <td>{{ $patient->email }}</td>
                    <td>{{ $patient->phone_number }}</td>
                    <td>
                        <a href="{{ route('patients.show', $patient) }}">View</a>
                        <a href="{{ route('patients.edit', $patient) }}">Edit</a>
                        <!-- Add a delete form here -->
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
