<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Môn Học</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{ route('monhoc.editsubmit') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Sửa Thông Tin Môn Học: <b class="text-danger">{{ $monHocs->MaMH }}</b></h3>
                </div>
                <div class="card-body">
                    <!-- MaMH (Read-only) -->
                    <div class="mb-3">
                        <label for="MaMH" class="form-label">Mã Môn Học</label>
                        <input type="text" readonly class="form-control" 
                            id="MaMH" name="MaMH" 
                            value="{{ $monHocs->MaMH }}">
                    </div>

                    <!-- TenMH -->
                    <div class="mb-3">
                        <label for="TenMH" class="form-label">Tên Môn Học</label>
                        <input type="text" class="form-control" 
                            id="TenMH" name="TenMH" 
                            value="{{ old('TenMH', $monHocs->TenMH) }}">
                        @error('TenMH')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- SoTiet -->
                    <div class="mb-3">
                        <label for="SoTiet" class="form-label">Số Tiết</label>
                        <input type="text" class="form-control" id="SoTiet" name="SoTiet" value="{{ old('SoTiet', $monHocs->Sotiet) }}">
                        @error('SoTiet')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>                    
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Lưu Thay Đổi</button>
                    <a href="/monhoc" class="btn btn-secondary">Trở lại</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
