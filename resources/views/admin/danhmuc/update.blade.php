@extends('admin.layout.main')
@section('main')
<div class="row" style="margin-left: 300px; margin-top: 100px">
    <h1>Thêm Category</h1>
    <form action="{{ route('danhmuc.update',$data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Name</span>
                <input type="text" class="form-control" placeholder="Name..." value="{{ $data->ten_danh_muc }}" name="name" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Descriptions</span>
               <textarea name="description" id="" cols="30" rows="10" class='form-control'>{{ $data->mo_ta }}</textarea>

            </div>
            <input type="hidden" name="file" value="{{ $data->hinh_anh }}">
        </div> <br>
        <img src="{{ asset('uploads/category/'.$data->hinh_anh) }}" class="" width="100px" alt="">
        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Image</span>
                <input type="file" class="form-control" name="file">
            </div>
        </div>

        <button class="btn btn-primary mt-3" >update</button>
    </form>
</div>
@endsection
