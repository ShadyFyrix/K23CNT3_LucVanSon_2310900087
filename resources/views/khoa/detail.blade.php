<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông Tin Khoa</title>
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card"></div>
            <div class="card-header">
                <h3>Thông tin khoa</h3>
            </div>
            <div class="card-body"> 
                <p class="card-text">
                    <b>Mã khoa:</b>
                    {{$khoa->MaKH}}
                </p>
                <p>
                    <b>Tên khoa:</b>
                    {{$khoa->TenKH}}
                </p>
            </div>   
            <div class="card-footer">
            <a href="/khoa" class="btn btn-primary">Back</a>    
            </div>  
        </div>      
        </section>
</body>
</html>
