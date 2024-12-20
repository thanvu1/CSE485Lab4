<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Reader;
=======
>>>>>>> mergecode
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        // Hiển thị danh sách các Reader, phân trang
        $readers = Reader::Orderby('updated_at', 'desc')->paginate(5);
        $stt = ($readers->currentPage() - 1) * $readers->perPage() + 1;
        return view('readers.index', compact('readers', 'stt'));
=======
        //
>>>>>>> mergecode
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        // Hiển thị form tạo mới Reader
        return view('readers.create');
=======
        //
>>>>>>> mergecode
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
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
=======
        //
>>>>>>> mergecode
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show(Reader $reader)
    {
        // Hiển thị thông tin chi tiết của Reader
        return view('readers.show', compact('reader'));
=======
    public function show(string $id)
    {
        //
>>>>>>> mergecode
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit(Reader $reader)
    {
        // Hiển thị form chỉnh sửa Reader
        return view('readers.edit', compact('reader'));
=======
    public function edit(string $id)
    {
        //
>>>>>>> mergecode
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
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
=======
    public function update(Request $request, string $id)
    {
        //
>>>>>>> mergecode
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
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
=======
    public function destroy(string $id)
    {
        //
>>>>>>> mergecode
    }
}
