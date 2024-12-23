<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Reader;
use App\Models\Borrow;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrows =Borrow::with('book', 'reader')->paginate(5);
        return view('admin.borrow.borrow-index', compact('borrows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Lấy danh sách sách và độc giả để điền vào form
        $books = Book::all();
        $readers = Reader::all();
        return view('admin.borrow.create', compact('books', 'readers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'reader_id' => 'required|exists:readers,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:borrow_date',
            'status' => 'required|in:borrowed,returned',
        ]);

        Borrow::create([
            'reader_id' => $request->reader_id,
            'book_id' => $request->book_id,
            'borrow_date' => $request->borrow_date,
            'return_date' => $request->return_date,
            'status' => $request->status,
        ]);

        return redirect()->route('borrow.create')->with('success', 'Borrow record added successfully!');
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
    }
}
