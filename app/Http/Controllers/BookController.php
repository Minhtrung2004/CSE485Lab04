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
    public function show(Book $book)
    {
        return view('admin.book.show', compact('book'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id); // Lấy thông tin cuốn sách cần chỉnh sửa
        return view('admin.book.edit', compact('book')); // Trả về view với thông tin sách
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'year' => 'required|integer|min:1000|max:9999', // Năm phải trong khoảng hợp lệ
        'quantity' => 'required|integer|min:1', // Số lượng phải lớn hơn 0
    ]);

    $book = Book::findOrFail($id); // Lấy cuốn sách cần cập nhật
    $book->update($validated); // Cập nhật dữ liệu

    return redirect()->route('admin.book.index')->with('success', 'Cập nhật sách thành công!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
{
    $book->delete();
    return redirect()->route('admin.book.index')->with('success', 'Cuốn sách đã được xóa thành công!');
}

}
