@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Reader</h1>
        <form action="{{ route('readers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="birthday">Birthday:</label>
                <input type="date" class="form-control" id="birthday" name="birthday" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Save</button>
            <a href="{{ route('readers.index') }}" class="btn btn-secondary mt-3">Back to Readers List</a>
        </form>
    </div>
@endsection
