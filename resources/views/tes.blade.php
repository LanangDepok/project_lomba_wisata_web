<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($data as $data2)
        name = {{ $data2->name }}
        <br>
        location = {{ $data2->location }}
        <br>
        description = {{ $data2->description }}
        <br>
        image = {{ $data2->image }}
    @endforeach
</body>

</html>
