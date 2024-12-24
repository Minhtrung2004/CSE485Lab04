@extends('admin.common.home-page')

@section('content')
    <h1>Chỉnh sửa Sách</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.book.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Tên sách</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $book->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Tác giả</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ old('author', $book->author) }}" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Thể loại</label>
            <input type="text" name="category" id="category" class="form-control" value="{{ old('category', $book->category) }}" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Năm xuất bản</label>
            <input type="number" name="year" id="year" class="form-control" value="{{ old('year', $book->year) }}" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Số lượng</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ old('quantity', $book->quantity) }}" required>
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-success">
                <i class="bi bi-save"></i> Cập nhật
            </button>
        </div>
    </form>
@endsection
