@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Reader Details</h1>
        <form>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $reader->name }}" disabled>
            </div>
            <div class="form-group">
                <label for="birthday">Birthday:</label>
                <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $reader->birthday }}" disabled>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $reader->address }}" disabled>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $reader->phone }}" disabled>
            </div>
            <a href="{{ route('readers.edit', $reader->id) }}" class="btn btn-primary mt-3">Edit Reader</a>
            <a href="{{ route('readers.index') }}" class="btn btn-secondary mt-3">Back to Readers List</a>
        </form>
    </div>
@endsection
