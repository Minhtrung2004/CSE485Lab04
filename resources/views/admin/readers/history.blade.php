@extends('admin.common.home-page')

@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Lịch sử mượn sách của {{ $reader->name }}</h5>
            </div>
            <div class="ibox-content">
                <table class="table table-hover no-margins" style="border: 2px solid #ddd; border-collapse: collapse;">
                    <thead>
                        <tr style="border-bottom: 2px solid #ccc;">
                            <th style="border: 1px solid #ddd; padding: 8px;">ID Mượn</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">Tên Sách</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">Ngày Mượn</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">Ngày Trả</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">Trạng Thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($borrows as $borrow)
                            <tr>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $borrow->id }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $borrow->book->name }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $borrow->borrow_date }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">{{ $borrow->return_date }}</td>
                                <td style="border: 1px solid #ddd; padding: 8px;">
                                    {{ $borrow->status ? 'Đã trả' : 'Đang mượn' }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
