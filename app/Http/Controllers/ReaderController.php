<?php

namespace App\Http\Controllers;

use App\Models\Reader;
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Hiển thị danh sách các Reader, phân trang
        $readers = Reader::Orderby('updated_at', 'desc')->paginate(5);
        $stt = ($readers->currentPage() - 1) * $readers->perPage() + 1;
        return view('readers.index', compact('readers', 'stt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Hiển thị form tạo mới Reader
        return view('readers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // Tạo Reader mới
        Reader::create($validated);

        // Chuyển hướng về danh sách Reader với thông báo thành công
        return redirect()->route('readers.index')
            ->with('success', 'Reader created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reader $reader)
    {
        // Hiển thị thông tin chi tiết của Reader
        return view('readers.show', compact('reader'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reader $reader)
    {
        // Hiển thị form chỉnh sửa Reader
        return view('readers.edit', compact('reader'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reader $reader)
    {
        // Validate dữ liệu đầu vào
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // Cập nhật Reader
        $reader->update($validated);

        // Chuyển hướng về thông tin chi tiết Reader với thông báo thành công
        return redirect()->route('readers.show', $reader)
            ->with('success', 'Reader updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reader $reader)
    {
        // Xóa Reader
        $reader->delete();

        // Chuyển hướng về danh sách Reader với thông báo thành công
        return redirect()->route('readers.index')
            ->with('success', 'Reader deleted successfully!');
    }
    public function confirmDelete(Reader $reader)
    {
        return view('reader.confirm-delete', compact('reader'));
    }
}
