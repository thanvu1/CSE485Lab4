<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách mượn trả sách</title>
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
        a {
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 15px;
            display: inline-block;
        }
        a:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        button {
            background-color: #ff5722;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #e64a19;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .pagination a {
            margin: 0 5px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .pagination a:hover {
            background-color: #45a049;
        }
        .pagination .active {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Danh sách mượn trả sách</h1>
    <a href="{{ route('borrows.create') }}">Thêm mượn sách mới</a>
    <table>
        <thead>
            <tr>
                <th>Độc giả</th>
                <th>Sách</th>
                <th>Ngày mượn</th>
                <th>Ngày trả (dự kiến)</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($borrows as $borrow)
                <tr>
                    <td>{{ $borrow->reader->name }}</td>
                    <td>{{ $borrow->book->name }}</td>
                    <td>{{ $borrow->borrow_date }}</td>
                    <td>{{ $borrow->return_date }}</td>
                    <td>{{ $borrow->status ? 'Đã trả' : 'Đang mượn' }}</td>
                    <td>
                        @if(!$borrow->status)
                            <form action="{{ route('borrows.update', $borrow->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit">Đánh dấu đã trả</button>
                            </form>
                        @endif
                        <a href="{{ route('borrows.history', $borrow->reader->id) }}">Xem lịch sử</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Phân trang -->
    <div class="pagination">
        {{ $borrows->links() }}
    </div>
</body>
</html>
