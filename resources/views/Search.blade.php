<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Tu dien Anh - Viet</h2>
<table>
<form action="/dictionary" method="post">
    @csrf
    <tr>
        <td>Nhap tu tim kiem</td>
        <td><input type="text" name="input"></td>
    </tr>
    <tr>
        <td colspan="2"><button type="submit">Search</button></td>
    </tr>
</form>
</table>
</body>
</html>
