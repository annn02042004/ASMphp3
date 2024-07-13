@extends('admin.layout.main')
@section('main')
    <div class="row" style="margin-left: 300px; margin-top: 100px">
        <h1>Thêm chức vụ</h1>
        <form action="{{ route('chucvu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mt-4">
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping">Name chức vụ</span>
                    <input type="text" class="form-control" placeholder="Name chuc vu..." name="name" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
            </div>
            <button class="btn btn-primary mt-3" >submit</button>
        </form>
    </div>
@endsection