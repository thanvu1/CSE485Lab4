@extends('layouts.app')

@section('content')
    
    {{-- <div class="container">
        <h1>Book Details</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>ID</th>
                <td>{{$book->id}}</td>
            </tr>
            <tr>
                <th>Book Name:</th>
                <td>{{$book->name}}</td>
            </tr>
            <tr>
                <th>Author:</th>
                <td>{{$book->author}}</td>
            </tr>
            <tr>
                <th>Category:</th>
                <td>{{$book->category}}</td>
            </tr>
            <tr>
                <th>Year:</th>
                <td>{{$book->year}}</td>
            </tr>
            <tr>
                <th>Quantity:</th>
                <td>{{$book->quantity}}</td>
            </tr>
        </table>
        <a href="{{ route('books.index')}}"> Return Books List</a>
    </div> --}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center">Book Details</h2>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <td>{{ $book->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $book->name }}</td>
                    </tr>
                    <tr>
                        <th>Author</th>
                        <td>{{ $book->author }}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{ $book->category }}</td>
                    </tr>
                    <tr>
                        <th>Year</th>
                        <td>{{ $book->year }}</td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td>{{ $book->quantity }}</td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{ $book->created_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{ $book->updated_at->format('Y-m-d H:i:s') }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle (Optional, for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


@endsection