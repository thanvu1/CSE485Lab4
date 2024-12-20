<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
=======
use App\Models\Book;

class BookController extends Controller
{
    
    public function index()
    {
        $books = Book::all();
        $books = Book::orderBy('created_at', 'desc')->paginate(25);;
        return view('books.index', compact('books'));
    }
    
    
    public function create()
    {
        return view('books.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'author' => 'required',
                'category' => 'required',
                'year' => 'required',
                'quantity' => 'required',

            ]);

        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Successfully.');
    }


    public function show(string $id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    
    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);

        // Cập nhật các trường dữ liệu
        $book->update($request->all());
        return redirect()->route('books.index')->with('update', 'Book updated successfully!');
    }

    
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('books.index')->with('danger', 'Book deleted successfully!');
>>>>>>> mergecode
    }
}
