@extends('admin.layout.main')
@section('main')
    <div class="row" style="margin-left: 300px; margin-top: 100px">
        <h1>Danh sách Phương thức</h1>
        <table>
            <thead>
                <th>ID</th>
                <th>Tên Phương Thức</th>
                <th>thao tác</th>
            </thead>
            <tbody>
                @foreach ($data as $index => $phuongthuc)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $phuongthuc->ten_phuong_thuc }}</td>
                    <td>
                        <form action="{{ route('phuongthucthanhtoan.destroy',$phuongthuc->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Bạn muốn xoá?')">Delete</button>
                        </form>
                        <a href="{{ route('phuongthucthanhtoan.edit',$phuongthuc->id) }}" class="btn btn-warning" >Update</a>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection