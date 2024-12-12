<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class MonHocController extends Controller
{
    public function getMonHocs()
    {
        // Lấy tất cả dữ liệu từ bảng 'monhoc'
        $monHocs = DB::table('monhoc')->get();
    
        // Truyền dữ liệu vào view với tên biến 'monHocs'
        return view('monhoc.list', ['monHocs' => $monHocs]);
    }
    public function getmonhoc($mamh)
    {
    //lấy dữ liệu từ bảng
      $monHocs = DB::table('monhoc')->where('MaMH',$mamh)->first();
      return view('monhoc.detail',['monHocs' => $monHocs]);
    }
    // insert
    public function insert(){
        return view('monhoc.insert');
        
    }
    public function insertSubmit(Request $request)
    {
        $request->validate([
            'MaMH' => 'required|string|max:10', 
            'TenMH' => 'required|string|max:100',
            'SoTiet' => 'required|integer|min:1',
        ]);
        DB::table('monhoc')->insert([
            'MaMH' => $request->MaMH,
            'TenMH' => $request->TenMH,
            'SoTiet' => $request->SoTiet,
        ]);
        return redirect('/monhoc')->with('success', 'Môn học đã được thêm thành công!');
    }    
    //edit 
    public function edit($mamh)
    {
    $monHocs = DB::table('monhoc')->where('MaMH', $mamh)->first();

    if (!$monHocs) {
        return redirect('/monhoc')->with('error', 'Môn học không tồn tại.');
    }

    return view('monhoc.edit', ['monHocs' => $monHocs]);
    }

    public function editSubmit(Request $request)
    {
        $request->validate([
            'TenMH' => 'required|string|max:100', 
            'SoTiet' => 'required|integer|min:1', 
        ]);
    
        DB::table('monhoc')->where('MaMH', $request->MaMH)->update([
            'TenMH' => $request->TenMH,
            'SoTiet' => $request->SoTiet,
        ]);
        return redirect('/monhoc')->with('success', 'Môn học đã được cập nhật thành công!');
    }    
    // delete
    public function delete($mamh)
    {
        DB::table('monhoc')->where('MaMH', '=', $mamh)->delete();
        return redirect('/monhoc')->with('success', 'Môn học đã được xóa thành công!');
    }    
}
