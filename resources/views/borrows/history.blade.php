<h1>Lịch sử mượn trả của {{ $reader->name }}</h1>
<table>
    <thead>
        <tr>
            <th>Sách</th>
            <th>Ngày mượn</th>
            <th>Ngày trả</th>
            <th>Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reader->borrows as $borrow)
            <tr>
                <td>{{ $borrow->book->name }}</td>
                <td>{{ $borrow->borrow_date }}</td>
                <td>{{ $borrow->return_date }}</td>
                <td>{{ $borrow->status ? 'Đã trả' : 'Đang mượn' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>