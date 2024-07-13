<?php

namespace App\Http\Controllers;

use App\Models\ChucVu;
use Illuminate\Http\Request;

class ChucVuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = ChucVu::all();
        return view('admin.chucvu.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.chucvu.add');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $ChucVu = new ChucVu();
        $ChucVu->ten_chuc_vu = $data['name'];
        $ChucVu->save();
        return redirect()->route('chucvu.index');
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
        $data = ChucVu::find($id);
        return view('admin.chucvu.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->all();
        $ChucVu = ChucVu::find($id);
        $ChucVu->ten_chuc_vu = $data['name'];
        $ChucVu->save();
        return redirect()->route('chucvu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = ChucVu::find($id);
        $data->delete();
        return redirect()->route('chucvu.index');
    }
}
