<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Môn Học</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1>Danh Sách Môn Học</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <a href="/monhoc/insert" class="btn btn-warning btn-lg fw-bold">Thêm <i class="fa-regular fa-square-caret-down"></i></a>
        <a href="/khoa" class="btn btn-warning btn-lg fw-bold"><i class="fa-solid fa-right-left"></i></a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Môn Học</th>
                    <th>Tên Môn Học</th>
                    <th>Số Tiết</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @php $stt = 0; @endphp
                @foreach ($monHocs as $item)
                    @php $stt++; @endphp
                    <tr>
                        <td>{{ $stt }}</td>
                        <td>{{ $item->MaMH }}</td>
                        <td>{{ $item->TenMH }}</td>
                        <td>{{ $item->Sotiet }}</td>
                        <td>
                            <a href="/monhoc/detail/{{ $item->MaMH }}" class="btn btn-success">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="/monhoc/edit/{{ $item->MaMH }}" class="btn btn-info">
                                <i class="fa-solid fa-up-right-from-square"></i>
                            </a>
                            <form action="{{ route('monhoc.delete', $item->MaMH) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa môn học này không? Mã: {{ $item->MaMH }}');">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>
