<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SinhVien extends Model
{
    use HasFactory;

    protected $table = 'sinhvien';
    public $timestamps = false;
    public $incrementing = false;   
    protected $keyType = 'string'; 
    protected $primaryKey = 'MaSV';
    protected $fillable = [
         'MaSV', 'HoSV', 'TenSV', 'Phai', 'NgaySinh', 'NoiSinh', 'MaKH', 'HocBong', 'DiemTB'
    ];
}
