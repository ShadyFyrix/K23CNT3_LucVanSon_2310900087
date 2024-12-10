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
    <section class="container border my-3">
        <h1>Danh sách Khoa</h1>
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
        <table class="table table-bordered">
            <thead>
                <tr class="text">
                    <a href="/khoa/create" class="btn btn-success">Thêm Mới</a>
                </tr>
                <tr>
                    <th>#</th>
                    <th>Mã Khoa</th>
                    <th>Tên Khoa</th>
                    <th>Công cụ</th>
                </tr>
            </thead>
            <tbody>
                @php 
                $stt = 0;
                @endphp
                @foreach ($khoa as $item)
                    @php
                    $stt++;
                    @endphp
                    <tr>
                        <th>{{ $stt }}</th>
                        <th>{{ $item->MaKH }}</th>
                        <th>{{ $item->TenKH }}</th>
                        <td class="text-center">
                            <a href="/khoa/detail/{{ $item->MaKH }}" class="btn btn-success">Chi tiết</a>
                            <a href="/khoa/edit/{{ $item->MaKH }}" class="btn btn-primary">Sửa</a>
                            <form action="{{ route('khoa.delete', $item->MaKH) }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger" 
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa khoa này?');">
                                    Xóa
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
