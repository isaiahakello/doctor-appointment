@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Patient Details</h1>
        <p><strong>Name:</strong> {{ $patient->first_name }} {{ $patient->last_name }}</p>
        <p><strong>Email:</strong> {{ $patient->email }}</p>
        <p><strong>Phone Number:</strong> {{ $patient->phone_number }}</p>
        <p><strong>Medical History:</strong> {{ $patient->medical_history }}</p>
        <a href="{{ route('patients.edit', $patient) }}">Edit</a>
    </div>
@endsection
