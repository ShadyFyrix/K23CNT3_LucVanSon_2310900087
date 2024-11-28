<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>View - Render Data</h1>
    <h2>{{$name}}</h2>
    <h1>#IF </h1>
    <hr>
    @verbatim
        <pre>
            @if (count($arr)==1)
                You have 1 element!1!1!!
            @elseif (count($arr)>1)
                You have Multiple Element!!!!!! :0
            @else 
                You Dont have anything :C 
            @endif
        </pre>
    @endverbatim
    <h2>Mang :</h2>
    @if (count($arr)==1)
        You have 1 element!1!1!!
    @elseif (count($arr)>1)
        You have Multiple Element!!!!!! :0
    @else 
        You Dont have anything :C 
    @endif
</body>
</html>