<?php

namespace App\Http\Controllers;

use App\Models\SinhVien;
use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    // Show all students
    public function index()
    {
        $sinhvien = SinhVien::all();
        return view('sinhvien.index', ['sinhvien' => $sinhvien]);
    }

    // Show the form for creating a new student
    public function create()
    {
        return view('sinhvien.create');
    }

    // Store a new student
    public function store(Request $request)
    {
        $sinhvien = new SinhVien();
        $sinhvien->MaSV = $request->MaSV;
        $sinhvien->HoSV = $request->HoSV;
        $sinhvien->TenSV = $request->TenSV;
        $sinhvien->Phai = $request->Phai;
        $sinhvien->NgaySinh = $request->NgaySinh;
        $sinhvien->NoiSinh = $request->NoiSinh;
        $sinhvien->MaKH = $request->MaKH;
        $sinhvien->HocBong = $request->HocBong;
        $sinhvien->DiemTB = $request->DiemTB; // Add DiemTB field
        $sinhvien->save();

        return redirect()->route('sinhvien.index')->with('success', 'Đã thêm mới một sinh viên!');
    }

    // Show the form to edit an existing student
    public function edit($maSV)
    {
        $sinhvien = SinhVien::where('MaSV', $maSV)->first();
        return view('sinhvien.edit', ['sinhvien' => $sinhvien]);
    }

    // Update a student's information
    public function update(Request $request, $maSV)
    {
        $sinhvien = SinhVien::where('MaSV', $maSV)->first();

        if ($sinhvien) {
            $sinhvien->HoSV = $request->HoSV;
            $sinhvien->TenSV = $request->TenSV;
            $sinhvien->Phai = $request->Phai;
            $sinhvien->NgaySinh = $request->NgaySinh;
            $sinhvien->NoiSinh = $request->NoiSinh;
            $sinhvien->MaKH = $request->MaKH;
            $sinhvien->HocBong = $request->HocBong;
            $sinhvien->DiemTB = $request->DiemTB; // Add DiemTB field
            $sinhvien->save();
            return redirect()->route('sinhvien.index')->with('success', 'Đã cập nhật thông tin sinh viên!');
        } else {
            return redirect()->route('sinhvien.index')->with('error', 'Sinh viên không tồn tại!');
        }
    }

    // Delete a student
    public function delete($maSV)
    {
        SinhVien::where('MaSV', $maSV)->delete();
        return redirect()->route('sinhvien.index')->with('success', 'Đã xóa sinh viên thành công!');
    }

    // Show details of a student
    public function detail($maSV)
    {
        $sinhvien = SinhVien::where('MaSV', $maSV)->first();
        return view('sinhvien.detail', ['sinhvien' => $sinhvien]);
    }
}
