@extends('admin.common.home-page')

@section('content')
    <h1>Danh sách Sách</h1>
    <a href="{{ route('admin.book.create') }}" class="btn btn-primary mb-4">Thêm mới</a>

    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sách</th>
                <th>Tác giả</th>
                <th>Thể loại</th>
                <th>Năm xuất bản</th>
                <th>Số lượng</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book) <!-- $books được truyền từ controller -->
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->category }}</td>
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->quantity }}</td>
                    <td>
                        <a href="{{ route('admin.book.show', $book) }}" class="btn btn-info">Xem</a>
                        <a href="{{ route('admin.book.edit', $book) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('admin.book.destroy', $book) }}" method="POST" style="display:inline;"
                            onsubmit="return confirmDelete();">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Hiển thị phân trang -->
    <div class="d-flex justify-content-center">
        {{ $books->links('pagination::bootstrap-4') }}
    </div>

    <script>
        function confirmDelete() {
            return confirm('Bạn có chắc chắn muốn xóa sách này không?');
        }
    </script>
@endsection
