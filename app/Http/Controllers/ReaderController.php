<?php

namespace App\Http\Controllers;

use App\Models\Reader;  // Dòng này là để import model Reader
use Illuminate\Http\Request;

class ReaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readers = Reader::latest()->paginate(10);
        return view('admin.readers.index', compact('readers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.readers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'address' => 'required|string|max:255',
            'phone' => 'required|digits:10',
        ]);

        Reader::create($validated);
        return redirect()->route('admin.readers.index')->with('success', 'Tạo người dùng thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reader $reader)
    {
        return view('admin.readers.show', compact('reader'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reader $reader)
    {
        return view('admin.readers.edit', compact('reader'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reader $reader)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        $reader->update($validated);
        return redirect()->route('admin.readers.index')->with('success', 'Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reader $reader)
    {
        $reader->delete();
        return redirect()->route('admin.readers.index')->with('success', 'Xóa người dùng thành công!');
    }
}