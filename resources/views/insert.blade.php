<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/destination/store" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name">
        <br>
        <input type="text" name="location">
        <br>
        <input type="text" name="description">
        <br>
        <input type="file" name="image">
        <br>
        <input type="submit" value="save">
    </form>
</body>

</html>
