<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(180deg, #2c3e50 0%, #3498db 100%);
            color: #fff;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: margin 0.5s ease-in-out;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }

        img:hover {
            transform: scale(1.1);
        }

        hr {
            margin: 20px 0;
            border: 0;
            height: 1px;
            background: #ddd;
        }

        h2 {
            color: #007BFF;
        }

        p {
            margin: 10px 0;
            line-height: 1.5;
            color: #333;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container" data-aos="fade-up">
        <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->name }}" class="img-fluid rounded">
        <hr>
        <h2>{{ $data->name }}</h2>
        <p>{{ $data->description }}</p>
        <p><strong>Lokasi:</strong> {{ $data->location }}</p>
        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    </div>

    <!-- Bootstrap JS and Popper.js CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- Activate AOS -->
    <script>
        AOS.init();
    </script>
</body>

</html>
