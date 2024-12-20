@extends('layouts.app')

@section('content')
    
    <div class="container">
        <h1>Add New Book</h1>
        <form action="{{ route('books.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Book Name:</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="Enter book name" required>
            </div>
            
            <div class="form-group">
                <label for="author">Author:</label>
                <input class="form-control" type="text" id="author" name="author" placeholder="Enter author name" required>
            </div>
            
            <div class="form-group">
                <label for="category">Category:</label>
                <input class="form-control" type="text" id="category" name="category" placeholder="Enter book category" required>
            </div>
            
            <div class="form-group">
                <label for="year">Year:</label>
                <input class="form-control" type="number" id="year" name="year" placeholder="Enter publication year" required>
            </div>
            
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input class="form-control" type="number" id="quantity" name="quantity" placeholder="Enter quantity" required>
            </div>
            
           
            <button type="submit" class="btn btn-primary mt-3">Save</button>
            

        </form>
    </div>
        
   



@endsection