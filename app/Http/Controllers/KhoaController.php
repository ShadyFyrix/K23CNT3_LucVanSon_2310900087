<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhoaController extends Controller
{
    public function index()
    {
        //truy van doc du lieu tu bang khoa
        $khoa = DB::select('select * from khoa');
        return view('khoa.index',['khoa'=>$khoa]);
    }
    public function detail($makh)
    {
        //truy van doc du lieu tu bang khoa thoe dieu kien makh
        $khoa= DB::select('select * from khoa where MaKH =?',[$makh])[0];
        return view('khoa.detail',['khoa'=>$khoa]);
    }
    public function create()
    {
        //truy van doc du lieu tu bang khoa
        return view('khoa.create');
    }
    public function createSubmit(Request $request)
    {
    $request->validate([
        'MaKH' => 'required|string|max:2',
        'TenKH' => 'required|string|max:50' 
    ]);
    DB::insert('insert into khoa (MaKH, TenKH) values (?, ?)', [
        $request->MaKH,
        $request->TenKH
    ]);    
    return redirect('/khoa')->with('success', 'Khoa created successfully!');
    }
    public function edit($MaKH)
    {
    $khoa = DB::select('SELECT * FROM khoa WHERE MaKH = ?', [$MaKH])[0];
    return view('khoa.edit', ['khoa' => $khoa]);
    }
    public function update(Request $request, $MaKH)
    {
    $request->validate([
        'TenKH' => 'required|string|max:50',
    ]);
    DB::update('UPDATE khoa SET TenKH = ? WHERE MaKH = ?', [
        $request->TenKH,
        $MaKH
    ]);
    return redirect('/khoa')->with('success', 'Khoa updated successfully :D!');
    }
    public function delete($MaKH)
    {
    DB::delete('DELETE FROM khoa WHERE MaKH = ?', [$MaKH]);
    return redirect('/khoa')->with('success', 'Khoa deleted successfully!');
    }
}
