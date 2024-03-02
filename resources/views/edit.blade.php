<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background: linear-gradient(180deg, #2c3e50 0%, #3498db 100%);
            color: #fff;
            font-family: 'Lato', sans-serif;
        }

        form {
            max-width: 600px;
            margin: 50px auto;
            background-color: #34495e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }

        label {
            margin-top: 10px;
            display: block;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
        }

        input[type="file"] {
            padding: 5px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <form action="/destination/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Edit Destination</h1>
        <label for="name">Name</label>
        <input type="text" value="{{ $data->name }}" id="name" name="name">
        <label for="location">Location</label>
        <input type="text" value="{{ $data->location }}" id="location" name="location">
        <label for="description">Description</label>
        <textarea id="description" name="description">{{ $data->description }}</textarea>
        <label for="image">Image</label>
        <input type="file" id="image" name="image">
        @method('PUT')
        <button type="submit" onclick="return confirm('Are you sure to edit this item?')">Edit</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
    </form>

    <!-- Bootstrap JS and Popper.js CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
