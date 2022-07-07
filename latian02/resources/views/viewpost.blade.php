<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Post</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
</head>

<body>
    <table border="1">
        <tr>
            <td>Judul</td>
            <td>Isi</td>
        </tr>
        <tbody>
            @foreach ($data as $list)
                <tr>
                    <td>{{ $list['judul'] }}</td>
                    <td>{{ $list['isi'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
