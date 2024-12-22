@extends('layouts.app')

@section('content')
    <h1>Danh sách Người đọc</h1>
    <a href="{{ route('admin.readers.create') }}" class="btn btn-primary">Thêm mới</a>

    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($readers as $reader)
                <tr>
                    <td>{{ $reader->id }}</td>
                    <td>{{ $reader->name }}</td>
                    <td>{{ $reader->birthday }}</td>
                    <td>{{ $reader->address }}</td>
                    <td>{{ $reader->phone }}</td>
                    <td>
                        <a href="{{ route('admin.readers.show', $reader) }}" class="btn btn-info">Xem</a>
                        <a href="{{ route('admin.readers.edit', $reader) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('admin.readers.destroy', $reader) }}" method="POST" style="display:inline;"
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
        {{ $readers->links('pagination::bootstrap-4') }}
    </div>

    <script>
        function confirmDelete() {
            return confirm('Bạn có chắc chắn muốn xóa người dùng này không?');
        }
    </script>
@endsection
