@extends('layouts.app')

@section('content')
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .alert-purple {
                background-color: #6f42c1;  /* Màu tím Bootstrap */
                color: white;
            }
        </style>
    </head>
    <div class="container">
        <h1>Book List</h1>
        <!-- Thông báo thành công -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('danger'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('danger') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('update'))
            <div class="alert alert-purple alert-dismissible fade show" role="alert">
                {{ session('update') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Add New Book</a>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Year</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book -> id}}</td>
                        <td>{{ $book -> name}}</td>
                        <td>{{ $book -> author}}</td>
                        <td>{{ $book -> category}}</td>
                        <td>{{ $book -> year}}</td>
                        <td>{{ $book -> quantity}}</td>
                        <td>
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                            </form>
                        </td>
                    </tr> 
                @endforeach 

                
    
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
            {{ $books->links('pagination::bootstrap-5') }}
        </div>
        
    </div>
@endsection