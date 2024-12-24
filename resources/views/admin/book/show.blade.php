@extends('admin.common.home-page')

@section('content')
    <h1>Thông tin Sách</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tên sách: {{ $book->name }}</h5>
            <p class="card-text"><strong>Tác giả:</strong> {{ $book->author }}</p>
            <p class="card-text"><strong>Thể loại:</strong> {{ $book->category }}</p>
            <p class="card-text"><strong>Năm xuất bản:</strong> {{ $book->year }}</p>
            <p class="card-text"><strong>Số lượng:</strong> {{ $book->quantity }}</p>
        </div>
    </div>

    <a href="{{ route('admin.book.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
    <a href="{{ route('admin.book.edit', $book) }}" class="btn btn-warning mt-3">Chỉnh sửa</a>
    <form action="{{ route('admin.book.destroy', $book) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-3">Xóa</button>
    </form>

    <script>
        function confirmDelete() {
            return confirm('Bạn có chắc chắn muốn xóa sách này không?');
        }
    </script>
@endsection
