<h1 style="text-align: center; margin-bottom: 20px;">Lịch sử mượn trả của {{ $reader->name }}</h1>

<table style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Sách</th>
            <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Ngày mượn</th>
            <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Ngày trả</th>
            <th style="border: 1px solid #ddd; padding: 8px; text-align: left;">Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        @foreach($reader->borrows as $borrow)
            <tr style="border: 1px solid #ddd;">
                <td style="padding: 8px;">{{ $borrow->book->name }}</td>
                <td style="padding: 8px;">{{ $borrow->borrow_date }}</td>
                <td style="padding: 8px;">{{ $borrow->return_date }}</td>
                <td style="padding: 8px; color: {{ $borrow->status ? 'green' : 'red' }}; font-weight: bold;">{{ $borrow->status ? 'Đã trả' : 'Đang mượn' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
