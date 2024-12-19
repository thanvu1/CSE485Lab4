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