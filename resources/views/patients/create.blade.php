@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Patient</h1>
        <form action="{{ route('patients.store') }}" method="POST">
            @csrf
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            <label for="phone_number">Phone Number</label>
            <input type="text" id="phone_number" name="phone_number">
            <button type="submit">Add Patient</button>
        </form>
    </div>
@endsection
