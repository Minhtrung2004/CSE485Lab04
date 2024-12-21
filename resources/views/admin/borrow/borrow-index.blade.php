@extends('admin.common.home-page')
@section('content')
    <div class="col-lg-13">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Borrow Management</h5>
            </div>
            <div class="ibox-content">
                <table class="table table-hover no-margins" style="border: 2px solid #ddd; border-collapse: collapse;">
                    <thead>
                        <tr style="border-bottom: 2px solid #ccc;">
                            <th style="border: 1px solid #ddd; padding: 8px;">id</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">reader_id</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">book_id</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">borrow_date</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">return_date</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">status</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">created_at</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">updated_at</th>
                            <th style="border: 1px solid #ddd; padding: 8px;">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border: 1px solid #ddd; padding: 8px;"></td>
                            <td style="border: 1px solid #ddd; padding: 8px;"></td>
                            <td style="border: 1px solid #ddd; padding: 8px;"></td>
                            <td style="border: 1px solid #ddd; padding: 8px;"></td>
                            <td style="border: 1px solid #ddd; padding: 8px;"></td>
                            <td style="border: 1px solid #ddd; padding: 8px;"></td>
                            <td style="border: 1px solid #ddd; padding: 8px;"></td>
                            <td style="border: 1px solid #ddd; padding: 8px;"></td>
                            <td style="border: 1px solid #ddd; padding: 8px; display: flex; gap: 10px">
                                {{-- btn show --}}
                                <a href="#" class="btn btn-info btn-sm" title="show" name="show">
                                    <i class="fa fa-eye"></i> Show
                                </a>
                                <!-- btn edit -->
                                <a href="#" class="btn btn-warning btn-sm" title="edit" name="edit">
                                    <i class="fa fa-edit"></i> Edit
                                </a>

                                <!-- Form xóa -->
                                <form action="#" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?') ">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
