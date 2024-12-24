@extends('admin.common.home-page')

@section('content')
    <h1>Thêm mới Sách</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.books.store') }}" method="POST">
        @csrf 
        <div class="mb-3">
            <label for="name" class="form-label">Tên sách</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Tác giả</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Thể loại</label>
            <input type="text" name="category" id="category" class="form-control" value="{{ old('category') }}" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Năm xuất bản</label>
            <input type="number" name="year" id="year" class="form-control" value="{{ old('year') }}" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Số lượng</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ old('quantity') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
@endsection
