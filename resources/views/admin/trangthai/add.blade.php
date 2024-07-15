@extends('admin.layout.main')
@section('main')
    <div class="row" style="margin-left: 300px; margin-top: 100px">
        <h1>Thêm chức vụ</h1>
        <form action="{{ route('trangthai.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-4">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Name trạng thái</span>
                    <input type="text" class="form-control" placeholder="Name trạng thái..." name="name" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button type="reset" class="btn btn-outline-secondary me-3">Nhap Lai</button>
                <button type="submit" class="btn btn-success">Them moi</button>
              </div>
                    </form>
    </div>
@endsection
