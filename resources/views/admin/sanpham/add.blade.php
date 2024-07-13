@extends('admin.layout.main')
@section('main')
<div class="row" style="margin-left: 300px; margin-top: 100px">
    <h1>Thêm Sản Phẩm</h1>
    <form action="{{ route('sanpham.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Ten San Pham</label>
        <input type="text" class="form-control" name="ten_san_pham" placeholder="Nhap ten san pham">
      </div>
      <div class="mb-3">
        <label class="form-label">So luong San Pham</label>
        <input type="number" class="form-control" name="so_luong" min="1" placeholder="Nhap so luong san pham">
      </div>
    <div class="mb-3">
        <label class="form-label">Gia San Pham</label>
        <input type="number" class="form-control" name="gia" min="1" placeholder="Nhap gia san pham">
      </div>
      <div class="mb-3">
        <label class="form-label">Gia Khuyen Mai</label>
        <input type="number" class="form-control" name="gia" min="1" placeholder="Nhap gia san pham">
      </div>
    <div class="mb-3">
        <label class="form-label">Ngay Nhap</label>
        <input type="date" class="form-control" name="ngay_nhap" >
      </div>
      <div class="mt-4">
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Descriptions</span>
           <textarea name="description" id="" cols="30" rows="10" class='form-control'></textarea>

        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Trang Thai</label>
        <select class="form-select" name="trang_thai">
            <option selected>Trang Thai</option>
            <option value="1">Con hang</option>
            <option value="0">Het Hang</option>
          </select>
      </div>
      <div class="mb-3 d-flex justify-content-center">
        <button type="reset" class="btn btn-outline-secondary me-3">Nhap Lai</button>
        <button type="submit" class="btn btn-success">Them moi</button>
      </div>
    </form>
</div>
@endsection
