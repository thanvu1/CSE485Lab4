<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Reader;
use App\Models\Book;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function index()
    {
        $borrows = Borrow::with(['reader', 'book'])->paginate(10);
        return view('borrows.index', compact('borrows'));
    }

    public function create()
    {
        $readers = Reader::all();
        $books = Book::all();
        return view('borrows.create', compact('readers', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'reader_id' => 'required|exists:readers,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
            'return_date' => 'required|date|after:borrow_date',
        ]);

        Borrow::create($request->all());
        return redirect()->route('borrows.index')->with('success', 'Borrow record added successfully.');
    }

    public function update(Request $request, Borrow $borrow)
    {
        $borrow->update(['status' => 1]); // Mark as returned
        return redirect()->route('borrows.index')->with('success', 'Borrow record updated successfully.');
    }

    public function history($reader_id)
    {
        $reader = Reader::with('borrows.book')->findOrFail($reader_id);
        return view('borrows.history', compact('reader'));
    }
}



