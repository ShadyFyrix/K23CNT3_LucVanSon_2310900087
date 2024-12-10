<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f0f0f0; 
            font-family: Arial, sans-serif;
        }
        .content {
            text-align: center;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .alr {
            padding: 10px;
            margin-bottom: 15px;
        }
        .alr-success {
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="content">
        @if(Session::has('K23CNT3-LucVanSon'))
            <div class="alr alr-success">
                {{ Session::get('K23CNT3-LucVanSon') }}
                <a href="/logout">Đăng Xuất</a>
            </div>
        @else
            <a href="/login">Login</a> 
        @endif
        <x-header name="Shady" :fruits="$fruits" />
    </div>
</body>
</html>
