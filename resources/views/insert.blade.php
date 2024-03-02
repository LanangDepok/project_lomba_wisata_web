<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Destination</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background: linear-gradient(180deg, #2c3e50 0%, #3498db 100%);
            color: #fff;
        }

        .container {
            margin-top: 50px;
        }

        .form-container {
            background-color: #34495e;
            color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-container form {
            margin-top: 20px;
        }

        .form-group {
            width: 100%;
            margin-bottom: 20px;
        }

        .text-center button {
            width: 50%;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="form-container">
                    <h2 class="text-center mb-4">Create Destination</h2>
                    <form action="/destination/store" method="POST" enctype="multipart/form-data" id="createForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" placeholder="Enter name" id="name"
                                name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="location">Location:</label>
                            <input type="text" class="form-control" placeholder="Enter location" id="location"
                                name="location" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" placeholder="Enter description" id="description" name="description" rows="4"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" class="form-control-file" id="image" name="image" required>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-secondary" onclick="goBack()">Back</button>
                            <button type="button" class="btn btn-primary" onclick="confirmSubmission()">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function goBack() {
            window.history.back();
        }

        function confirmSubmission() {
            Swal.fire({
                title: 'Confirm Submission',
                text: 'Are you sure you want to save this destination?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, save it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, submit the form
                    document.getElementById('createForm').submit();
                }
            });
        }
    </script>
</body>

</html>
