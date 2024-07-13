@extends('admin.layout.main')
@section('main')
<div class="row" style="margin-left: 300px; margin-top: 100px">
    <button class="btn btn-success" style="width: 150px"><a href="{{ route('danhmuc.create') }}">thêm danh mục</a>
    </button>
    <h1>Danh Sách Danh Mục</h1>
    <table>
        <thead>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Mô tả</th>
            <th>Hình ảnh</th>
            <th>Thao tác</th>
        </thead>
        <tbody>
            @foreach ($data as $index => $danhMuc)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $danhMuc->ten_danh_muc }}</td>
                <td>{{ $danhMuc->mo_ta }}</td>
                <td>
                    <img src="{{ asset('uploads/category/'.$danhMuc->hinh_anh) }}" width="100px" alt="">
                </td>
                <td>
                    <form action="{{ route('danhmuc.destroy',$danhMuc->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Bạn muốn xoá?')">Delete</button>
                    </form>
                    <a href="{{ route('danhmuc.edit',$danhMuc->id) }}" class="btn btn-warning" >Update</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
