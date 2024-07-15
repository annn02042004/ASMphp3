<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = SanPham::all();
        // return response()->json($data);
        return view('admin.sanpham.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.sanpham.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'ten_san_pham' => 'required|string|max:255',
        //     'so_luong' => 'required|integer',
        //     'gia_san_pham' => 'required|numeric',
        //     'gia_khuyen_mai' => 'nullable|numeric',
        //     'ngay_nhap' => 'required|date',
        //     'mo_ta' => 'nullable|string',
        //     'danh_muc_id' => 'required|integer',
        //     'trang_thai' => 'required|boolean',
        // ]);

        // $sanpham = SanPham::create($data);

        // return response()->json($sanpham, 201);

        $data = $request->all();
        $sanpham = new SanPham();
        $sanpham->ten_san_pham = $data['ten_san_pham'];
        $sanpham->so_luong = $data['so_luong'];
        // $sanpham->gia_san_pham = $data[''];
        // $sanpham->gia_khuyen_mai= $data['gia_khuyen_mai'];
        $sanpham->ngay_nhap=  $data['ngay_nhap'];
        $sanpham->mo_ta = $data['description'];
        // $sanpham->danh_muc_id = $data['id'];
        $sanpham->trang_thai = $data['trang_thai'];
        $sanpham->save();
        return redirect()->route('sanpham.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
