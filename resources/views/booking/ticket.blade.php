@extends('layouts.app') @section('content')
<div class="container">
    <h1 class="mt-4">Create a New Trip</h1>

    <form action="#" method="POST">
        @csrf

        <div class="form-group">
            <label for="destination">Destination:</label>
            <input type="text" class="form-control" id="destination" name="destination" placeholder="Enter destination" required>
        </div>

        <div class="form-group">
            <label for="departure_date">Departure Date:</label>
            <input type="date" class="form-control" id="departure_date" name="departure_date" required>
        </div>

        <div class="form-group">
            <label for="return_date">Return Date:</label>
            <input type="date" class="form-control" id="return_date" name="return_date">
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Trip</button>
    </form>
</div>
@endsection
