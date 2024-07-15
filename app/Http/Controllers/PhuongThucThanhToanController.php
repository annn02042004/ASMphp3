<?php

namespace App\Http\Controllers;

use App\Models\PhuongThucThanhToan;
use Illuminate\Http\Request;

class PhuongThucThanhToanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = PhuongThucThanhToan::all();
        return view('admin.phuongthucthanhtoan.index', compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.phuongthucthanhtoan.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $PhuongThuc = new PhuongThucThanhToan();
        $PhuongThuc->ten_phuong_thuc = $data['name'];
        $PhuongThuc->save();
        return redirect()->route('phuongthucthanhtoan.index');
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
        $data = PhuongThucThanhToan::find($id);
        return view('admin.phuongthucthanhtoan.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->all();
        $PhuongThuc = PhuongThucThanhToan::find($id);
        $PhuongThuc->ten_phuong_thuc = $data['name'];
        $PhuongThuc->save();
        return redirect()->route('phuongthucthanhtoan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = PhuongThucThanhToan::find($id);
        $data->delete();
        return redirect()->route('phuongthucthanhtoan.index');
    }
}
