<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-4">
        <h1>Thêm Sinh Viên Mới</h1>
        <form action="{{ route('sinhvien.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="MaSV">Mã Sinh Viên</label>
                <input type="text" class="form-control" id="MaSV" name="MaSV" required>
            </div>

            <div class="form-group">
                <label for="HoSV">Họ</label>
                <input type="text" class="form-control" id="HoSV" name="HoSV" required>
            </div>

            <div class="form-group">
                <label for="TenSV">Tên</label>
                <input type="text" class="form-control" id="TenSV" name="TenSV" required>
            </div>

            <div class="form-group">
                <label for="Phai">Giới Tính</label>
                <select class="form-control" id="Phai" name="Phai">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>

            <div class="form-group">
                <label for="NgaySinh">Ngày Sinh</label>
                <input type="date" class="form-control" id="NgaySinh" name="NgaySinh" required>
            </div>

            <div class="form-group">
                <label for="NoiSinh">Nơi Sinh</label>
                <input type="text" class="form-control" id="NoiSinh" name="NoiSinh" required>
            </div>

            <div class="form-group">
                <label for="MaKH">Mã Khoa</label>
                <input type="text" class="form-control" id="MaKH" name="MaKH" required>
            </div>

            <div class="form-group">
                <label for="HocBong">Học Bổng</label>
                <input type="text" class="form-control" id="HocBong" name="HocBong">
            </div>

            <div class="form-group">
                <label for="DiemTB">Điểm Trung Bình</label>
                <input type="number" step="0.01" class="form-control" id="DiemTB" name="DiemTB">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Thêm Mới</button>
        </form>
    </div>
</body>
</html>
