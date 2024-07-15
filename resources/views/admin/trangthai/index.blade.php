@extends('admin.layout.main')
@section('main')
    <div class="row" style="margin-left: 300px; margin-top: 100px">
        <h1>Danh sách trạng thái</h1>
        <table>
            <thead>
                <th>ID</th>
                <th>Tên Trạng thái</th>
                <th>thao tác</th>
            </thead>
            <tbody>
                @foreach ($data as $index => $trangthai)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $trangthai->ten_trang_thai }}</td>
                    <td>
                        <form action="{{ route('trangthai.destroy',$trangthai->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Bạn muốn xoá?')">Delete</button>
                        </form>
                        <a href="{{ route('trangthai.edit',$trangthai->id) }}" class="btn btn-warning" >Update</a>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection