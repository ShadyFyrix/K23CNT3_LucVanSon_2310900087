<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
            text-align: left;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>Account List:</h1>
    <table>
        <caption>Details of User Accounts</caption>
        <thead>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>UserName</th>
                <th>Password</th>
                <th>FullName</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item['id']}}</td>
                    <td>{{$item['UserName']}}</td>
                    <td>{{$item['Password']}}</td>
                    <td>{{$item['FullName']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
