@extends('admin.layout.main')
@section('main')
<div class="row" style="margin-left: 300px; margin-top: 100px">
    <h1>Sửa thông tin</h1>
    <form action="{{ route('phuongthucthanhtoan.update', $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Name</span>
                <input type="text" class="form-control" placeholder="Name..." value="{{ $data->ten_phuong_thuc }}" name="name" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
        </div>
        <button class="btn btn-primary mt-3" >update</button>
    </form>
@endsection