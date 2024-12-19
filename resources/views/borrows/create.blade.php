<h1>Thêm mượn sách mới</h1>
<form action="{{ route('borrows.store') }}" method="POST">
    @csrf
    <label>Độc giả:</label>
    <select name="reader_id">
        @foreach($readers as $reader)
            <option value="{{ $reader->id }}">{{ $reader->name }}</option>
        @endforeach
    </select>
    <label>Sách:</label>
    <select name="book_id">
        @foreach($books as $book)
            <option value="{{ $book->id }}">{{ $book->name }}</option>
        @endforeach
    </select>
    <label>Ngày mượn:</label>
    <input type="date" name="borrow_date" required>
    <label>Ngày trả (dự kiến):</label>
    <input type="date" name="return_date" required>
    <button type="submit">Thêm</button>
</form>