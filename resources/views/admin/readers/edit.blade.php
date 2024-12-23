@extends('admin.common.home-page')

@section('content')
    <h1>Chỉnh sửa Reader</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.readers.update', $reader) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Tên</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $reader->name) }}"
                required>
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Ngày sinh</label>
            <input type="date" name="birthday" id="birthday" class="form-control"
                value="{{ old('birthday', $reader->birthday) }}" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Địa chỉ</label>
            <input type="text" name="address" id="address" class="form-control"
                value="{{ old('address', $reader->address) }}" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Số điện thoại</label>
            <input type="text" name="phone" id="phone" class="form-control"
                value="{{ old('phone', $reader->phone) }}" required>
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-success">
                <i class="bi bi-save"></i> cập nhật
            </button>
        </div>
    </form>
@endsection
