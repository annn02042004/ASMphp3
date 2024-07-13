<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = DanhMuc::all();
        // return response()->json($data);
        return view('admin.danhmuc.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.danhmuc.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $category = new DanhMuc();
        $category->ten_danh_muc = $data['name'];
        $category->mo_ta = $data['description'];
        $name_file = $request->file('file'); // lấy file
        $path = 'uploads/category/';
        //   dd($name_file);
        $name_image = $name_file->getClientOriginalName();
        // dd($name_image);
        $name = current(explode('.', $name_image));
        //    dd($name);
        $real_name = $name . '_' . rand(1, 1000) . '.' . $name_file->getClientOriginalExtension();
        $name_file->move($path, $real_name);
        $category->hinh_anh = $real_name;
        $category->save();
        return redirect()->route('danhmuc.index');
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
        $data = DanhMuc::find($id);
        return view('admin.danhmuc.update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $category = DanhMuc::find($id);
        $category->ten_danh_muc = $data['name'];
        $category->mo_ta = $data['description'];
        $name_file = $request->file('file'); // lấy file
        $real_name = $data['file'];
        if ($name_file) {
            $size = $name_file->getSize();
            if ($size > 0) {
                if(file_exists('uploads/category/'.$category->hinh_anh)){
                    unlink('uploads/category/'.$category->hinh_anh);
                }
                $path = 'uploads/category/';
                //   dd($name_file);
                $name_image = $name_file->getClientOriginalName();
                // dd($name_image);
                $name = current(explode('.', $name_image));
                //    dd($name);
                $real_name = $name . '_' . rand(1, 1000) . '.' . $name_file->getClientOriginalExtension();
                $name_file->move($path, $real_name);
            }
        }
        $category->hinh_anh = $real_name;
        $category->save();
        return redirect()->route('danhmuc.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = DanhMuc::find($id);
        if(file_exists('uploads/category/'.$category->hinh_anh)){
            unlink('uploads/category/'.$category->hinh_anh);
        }
      $category->delete();
      return redirect()->route('danhmuc.index');
    }
}
