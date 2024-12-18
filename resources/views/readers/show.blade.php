<!DOCTYPE html>
<html>
<head>
    <title>Reader Details</title>
</head>
<body>
<h1>Reader Details</h1>
<p><strong>Name:</strong> {{ $reader->name }}</p>
<p><strong>Email:</strong> {{ $reader->email }}</p>
<p><strong>Birthday:</strong> {{ $reader->birthday }}</p>
<p><strong>Address:</strong> {{ $reader->address }}</p>
<p><strong>Phone:</strong> {{ $reader->phone }}</p>

<a href="{{ route('readers.index') }}">Back to Readers List</a>
</body>
</html>
