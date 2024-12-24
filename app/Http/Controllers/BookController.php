<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(10);
        return view('admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate dữ liệu đầu vào
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'year' => 'required|integer|min:1900|max:' . date('Y'),
        'quantity' => 'required|integer|min:1',
    ]);

    // Tạo mới một bản ghi sách
    Book::create($validated);

    // Chuyển hướng về danh sách sách và gửi thông báo thành công
    return redirect()->route('admin.book.index')->with('success', 'Tạo sách thành công!');
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
        
    }
}
