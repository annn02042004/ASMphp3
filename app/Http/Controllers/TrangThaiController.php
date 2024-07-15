<?php

namespace App\Http\Controllers;

use App\Models\TrangThai;
use Illuminate\Http\Request;

class TrangThaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = TrangThai::all();
        return view('admin.trangthai.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.trangthai.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $TrangThai = new TrangThai();
        $TrangThai->ten_trang_thai = $data['name'];
        $TrangThai->save();
        return redirect()->route('trangthai.index');
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
        $data = TrangThai::find($id);
        return view('admin.trangthai.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->all();
        $TrangThai = TrangThai::find($id);
        $TrangThai->ten_trang_thai = $data['name'];
        $TrangThai->save();
        return redirect()->route('trangthai.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = TrangThai::find($id);
        $data->delete();
        return redirect()->route('trangthai.index');
    }
}
