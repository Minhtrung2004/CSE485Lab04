@extends('layouts.app')

@section('content')
    <h1>Thêm mới Reader</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.readers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Tên</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Ngày sinh</label>
            <input type="date" name="birthday" id="birthday" class="form-control" value="{{ old('birthday') }}"
                required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Địa chỉ</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Số điện thoại</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
@endsection
