<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thêm mới thông tin môn học </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('monhoc.insertsubmit') }}" method="post">
                    @csrf
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="MaMH">Mã Môn Học</span>
                        <input type="text" class="form-control" aria-describedby="MaMH" name="MaMH" value="{{ old('MaMH') }}">
                        @error('MaMH')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="TenMH">Tên Môn Học</span>
                        <input type="text" class="form-control" aria-describedby="TenMH" name="TenMH" value="{{ old('TenMH') }}">
                        @error('TenMH')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="SoTiet">Số Tiết</span>
                        <input type="text" class="form-control" aria-describedby="SoTiet" name="SoTiet" value="{{ old('SoTiet') }}">
                        @error('SoTiet')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" name="btnSubmit" value="Thêm mới">
                        <a href="/monhoc" class="btn btn-secondary">Trở lại</a>
                    </div>
                </form>                
            </div>
        </div>
    </section>
</body>
</html>