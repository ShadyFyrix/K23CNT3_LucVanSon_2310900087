<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="fex justify-center">
        @if(Session::has('K23CNT3-LucVanSon'))
            <div class="alr alr-success">
                {{Session::get('K23CNT3-LucVanSon') }}
                <a href="/logout">Đăng Xuất</a>
            </div>
            @else
            <a href="/login">Login</a> 
            @endif
    </div>
    <x-header name="Shady" :fruits="$fruits"/>
</body>
</html>