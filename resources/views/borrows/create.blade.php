<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mượn sách mới</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }
        select, input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Thêm mượn sách mới</h1>
    <form action="{{ route('borrows.store') }}" method="POST">
        @csrf
        <label for="reader_id">Độc giả:</label>
        <select name="reader_id" id="reader_id" required>
            @foreach($readers as $reader)
                <option value="{{ $reader->id }}">{{ $reader->name }}</option>
            @endforeach
        </select>

        <label for="book_id">Sách:</label>
        <select name="book_id" id="book_id" required>
            @foreach($books as $book)
                <option value="{{ $book->id }}">{{ $book->name }}</option>
            @endforeach
        </select>

        <label for="borrow_date">Ngày mượn:</label>
        <input type="date" name="borrow_date" id="borrow_date" required>

        <label for="return_date">Ngày trả:</label>
        <input type="date" name="return_date" id="return_date" required>

        <button type="submit">Thêm mượn sách mới</button>
    </form>
</body>
</html>
