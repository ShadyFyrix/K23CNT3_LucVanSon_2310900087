<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h2> Thông tin chi tiết môn học</h2>
            </div>
            <div class="card-body">
                @if ($monHocs)
                    <p class="card-text">
                        <b>Mã Môn Học:</b> {{$monHocs->MaMH }}
                    </p>
                    <p>
                        <b>Tên Môn Học:</b>{{$monHocs->TenMH }}
                    </p>
                    <p>
                        <b>Số Tiết:</b>{{$monHocs->Sotiet }}
                        
                    </p>
                @else
                    <p>Không tìm thấy thông tin khoa</p>
                @endif
            </div>
            <div class="card-footer">
                <a href="/monhoc" class="btn btn-primary">Back</a>
            </div>
        </div>
    </section>
</body>
</html>