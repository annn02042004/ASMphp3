@extends('admin.layout.main')
@section('main')
<div class="row" style="margin-left: 300px; margin-top: 100px">
    <button class="btn btn-success" style="width: 150px"><a href="{{ route('sanpham.create') }}">thêm sản phẩm</a>
    </button>
    <h1>Danh Sách Sản Phẩm</h1>
    <table>
        <thead>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>số lượng</th>
            <th>giá sản phẩm</th>
            <th>giá khuyến mãi</th>
            <th>ngày nhập</th>
            <th>Mô tả</th>
            <th>trạng thái</th>
            <th>Thao tác</th>
        </thead>
        <tbody>
            @foreach ($data as $index => $sanpham)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $sanpham->ten_san_pham }}</td>
                <td>{{ $sanpham->so_luong }}</td>
                <td>{{ $sanpham->gia_san_pham }}</td>
                <td>{{ $sanpham->gia_khuyen_mai }}</td>
                <td>{{ $sanpham->ngay_nhap }}</td>
                <td>{{ $sanpham->mo_ta }}</td>
                <td>{{ $sanpham->trang_thai }}</td>
                <td>
                    <form action="{{ route('sanpham.destroy',$sanpham->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Bạn muốn xoá?')">Delete</button>
                    </form>
                    <a href="{{ route('sanpham.edit',$sanpham->id) }}" class="btn btn-warning" >Update</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
