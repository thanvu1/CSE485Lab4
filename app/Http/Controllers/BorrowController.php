<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Reader;
use App\Models\Book;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    // Hiển thị danh sách các mượn sách
    public function index()
{
    $borrows = Borrow::with('reader', 'book')
        ->orderBy('created_at', 'desc')
        ->paginate(10); // Adjust the number per page as needed

    return view('borrows.index', compact('borrows'));
}


    // Hiển thị form để tạo mới mượn sách
    public function create()
    {
        // Lấy tất cả độc giả và sách
        $readers = Reader::all();
        $books = Book::all();

        return view('borrows.create', compact('readers', 'books'));
    }

    // Xử lý lưu thông tin mượn sách
    public function store(Request $request)
    {
        $request->validate([
            'reader_id' => 'required|exists:readers,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
            'return_date' => 'required|date|after:borrow_date',
        ]);
    
        // Tạo mới bản ghi mượn sách
        Borrow::create([
            'reader_id' => $request->reader_id,
            'book_id' => $request->book_id,
            'borrow_date' => $request->borrow_date,
            'return_date' => $request->return_date,
            'status' => 0, // Mượn sách, chưa trả
        ]);
    
        return redirect()->route('borrows.index')->with('success', 'Mượn sách thành công!');
    }
    

    // Cập nhật trạng thái sách đã được trả
    public function update(Request $request, $id)
    {
        // Tìm bản ghi mượn sách theo id
        $borrow = Borrow::findOrFail($id);
        
        // Cập nhật trạng thái sách đã trả
        $borrow->status = 1; // Đã trả
        $borrow->save();

        // Quay lại trang danh sách với thông báo thành công
        return redirect()->route('borrows.index')->with('success', 'Cập nhật trạng thái thành công!');
    }

    // Xem lịch sử mượn sách của độc giả
    public function history($reader_id)
    {
        // Lấy thông tin độc giả cùng với lịch sử mượn sách
        $reader = Reader::with('borrows.book')->findOrFail($reader_id);

        // Trả về view lịch sử mượn sách của độc giả
        return view('borrows.history', compact('reader'));
    }
}
