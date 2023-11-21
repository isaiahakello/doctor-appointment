@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Patient</h1>
        <form action="{{ route('patients.update', $patient) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" value="{{ $patient->first_name }}">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" value="{{ $patient->last_name }}">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ $patient->email }}">
            <label for="phone_number">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ $patient->phone_number }}">
            <button type="submit">Update Patient</button>
        </form>
    </div>
@endsection
