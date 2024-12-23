@extends('admin.common.home-page')
@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Add New Borrow Record</h5>
            </div>
            <div class="ibox-content">
                <form action="{{ route('borrow.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="reader_id">Reader</label>
                        <select name="reader_id" id="reader_id" class="form-control">
                            <option value="">Select Reader</option>
                            @foreach ($readers as $reader)
                                <option value="{{ $reader->id }}" {{ old('reader_id') == $reader->id ? 'selected' : '' }}>
                                    {{ $reader->name }} (ID: {{ $reader->id }})
                                </option>
                            @endforeach
                        </select>
                        @error('reader_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="book_id">Book</label>
                        <select name="book_id" id="book_id" class="form-control">
                            <option value="">Select Book</option>
                            @foreach ($books as $book)
                                <option value="{{ $book->id }}" {{ old('book_id') == $book->id ? 'selected' : '' }}>
                                    {{ $book->title }} (ID: {{ $book->id }})
                                </option>
                            @endforeach
                        </select>
                        @error('book_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="borrow_date">Borrow Date</label>
                        <input type="date" name="borrow_date" id="borrow_date" class="form-control"
                            value="{{ old('borrow_date') }}">
                        @error('borrow_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="return_date">Return Date</label>
                        <input type="date" name="return_date" id="return_date" class="form-control"
                            value="{{ old('return_date') }}">
                        @error('return_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="borrowed" {{ old('status') == 'borrowed' ? 'selected' : '' }}>Borrowed</option>
                            <option value="returned" {{ old('status') == 'returned' ? 'selected' : '' }}>Returned</option>
                        </select>
                        @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Add Borrow Record</button>
                </form>
            </div>
        </div>
    </div>
@endsection
