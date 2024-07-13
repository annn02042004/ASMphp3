@extends('admin.layout.main')
@section('main')
    <div class="row" style="margin-left: 300px; margin-top: 100px">
        <h1>Danh sách chức vụ</h1>
        <table>
            <thead>
                <th>ID</th>
                <th>Tên chức vụ</th>
                <th>thao tác</th>
            </thead>
            <tbody>
                @foreach ($data as $index => $chucvu)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $chucvu->ten_chuc_vu }}</td>
                    <td>
                        <form action="{{ route('chucvu.destroy',$chucvu->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Bạn muốn xoá?')">Delete</button>
                        </form>
                        <a href="{{ route('chucvu.edit',$chucvu->id) }}" class="btn btn-warning" >Update</a>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
@endsection