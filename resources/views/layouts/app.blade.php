<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
    <title>Library Management System</title>
=======
    <title>Reader Management App</title>
>>>>>>> mergecode
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
<<<<<<< HEAD
{{--        <a class="navbar-brand" href="{{ route('dashboard') }}">Library Management</a>--}}
        <a class="navbar-brand">Library Management</a>
=======
        <a class="navbar-brand" href="{{ route('books.index') }}">Book Management</a>
>>>>>>> mergecode
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
<<<<<<< HEAD
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" aria-current="page" href="{{ route('books.index') }}">Book List</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('books.create') }}">Add New Book</a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('readers.index') }}">Reader List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('readers.create') }}">Add New Reader</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('borrows.index') }}">Borrow List</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('borrows.create') }}">New Borrow</a>--}}
{{--                </li>--}}
=======
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('books.index') }}">Books List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('books.create') }}">Add New Books</a>
                </li>
>>>>>>> mergecode
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<<<<<<< HEAD
=======
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

>>>>>>> mergecode
</body>
</html>
