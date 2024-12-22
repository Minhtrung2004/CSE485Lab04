@extends('layouts.app')

@section('content')
    <h1>Thông tin Reader</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tên: {{ $reader->name }}</h5>
            <p class="card-text"><strong>Ngày sinh:</strong> {{ $reader->birthday }}</p>
            <p class="card-text"><strong>Địa chỉ:</strong> {{ $reader->address }}</p>
            <p class="card-text"><strong>Số điện thoại:</strong> {{ $reader->phone }}</p>
        </div>
    </div>

    <a href="{{ route('admin.readers.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
    <a href="{{ route('admin.readers.edit', $reader) }}" class="btn btn-warning mt-3">Chỉnh sửa</a>
    <form action="{{ route('admin.readers.destroy', $reader) }}" method="POST" style="display:inline;"
        onsubmit="return confirmDelete();">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-3">Xóa</button>
    </form>

    <script>
        function confirmDelete() {
            return confirm('Bạn có chắc chắn muốn xóa người dùng này không?');
        }
    </script>
@endsection
