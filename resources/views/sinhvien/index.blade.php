<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container my-4">
        <h1>Danh Sách Sinh Viên</h1>
        <a href="/khoa" class="btn btn-warning btn-lg fw-bold">Khoa <i class="fa-solid fa-right-left"></i></a>
        <a href="/monhoc" class="btn btn-warning btn-lg fw-bold">Môn Học <i class="fa-solid fa-right-left"></i></a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Sinh Viên</th>
                    <th>Họ Và Tên</th>
                    <th>Giới Tính</th>
                    <th>Ngày Sinh</th>
                    <th>Nơi Sinh</th>
                    <th>Mã Khoa</th>
                    <th>Học Bổng</th>
                    <th>Điểm Trung Bình</th> <!-- Added column -->
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sinhvien as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->MaSV }}</td>
                        <td>{{ $item->HoSV }} {{ $item->TenSV }}</td>
                        <td>{{ $item->Phai }}</td>
                        <td>{{ $item->NgaySinh }}</td>
                        <td>{{ $item->NoiSinh }}</td>
                        <td>{{ $item->MaKH }}</td>
                        <td>{{ $item->HocBong }}</td>
                        <td>{{ $item->DiemTB }}</td> <!-- Display DiemTB -->
                        <td>
                            <a href="{{ route('sinhvien.detail', $item->MaSV) }}" class="btn btn-success">Chi tiết</a>
                            <a href="{{ route('sinhvien.edit', $item->MaSV) }}" class="btn btn-primary">Sửa</a>
                            <form action="{{ route('sinhvien.delete', $item->MaSV) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h3>Tổng Số: {{ $sinhvien->count() }}</h3>
        <a href="{{ route('sinhvien.create') }}" class="btn btn-primary">Thêm Mới</a>
    </div>
</body>
</html>
