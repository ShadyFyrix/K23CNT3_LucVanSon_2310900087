<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-4">
        <h1>Chi Tiết Sinh Viên</h1>
        <table class="table">
            <tr>
                <th>Mã Sinh Viên</th>
                <td>{{ $sinhvien->MaSV }}</td>
            </tr>
            <tr>
                <th>Họ và Tên</th>
                <td>{{ $sinhvien->HoSV }} {{ $sinhvien->TenSV }}</td>
            </tr>
            <tr>
                <th>Giới Tính</th>
                <td>{{ $sinhvien->Phai }}</td>
            </tr>
            <tr>
                <th>Ngày Sinh</th>
                <td>{{ $sinhvien->NgaySinh }}</td>
            </tr>
            <tr>
                <th>Nơi Sinh</th>
                <td>{{ $sinhvien->NoiSinh }}</td>
            </tr>
            <tr>
                <th>Mã Khoa</th>
                <td>{{ $sinhvien->MaKH }}</td>
            </tr>
            <tr>
                <th>Học Bổng</th>
                <td>{{ $sinhvien->HocBong }}</td>
            </tr>
            <tr>
                <th>Điểm Trung Bình</th>
                <td>{{ $sinhvien->DiemTB }}</td>
            </tr>
        </table>
        <a href="{{ route('sinhvien.index') }}" class="btn btn-secondary">Quay lại</a>
    </div>
</body>
</html>
