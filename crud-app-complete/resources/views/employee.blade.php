<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-10">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/employee') }}">Employee Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/display') }}">Employee Data</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center mt-5">
            @if (session('status'))
            <div class="col-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Hey! </strong> {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            @endif
        </div>
    </div>

    <div class="container">
        <div class="row text-center text-primary">
            <h1>Employee Form</h1>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-6 border rounded-3 shadow">
                <form action="{{ url('/employee') }}" method="POST">
                    @csrf
                    <div class="mb-3 mt-5">
                        <input type="text" class="form-control" name="name" placeholder="Enter Your name...">
                    </div>
                    <div class="my-3">
                        <input type="number" class="form-control" name="age" placeholder="Enter Your Age...">
                    </div>
                    <div class="my-3">
                        <input type="number" class="form-control" name="salary" placeholder="Enter Your Salary...">
                    </div>
                    <div class="my-3 text-center">
                        <button type="submit" class="btn btn-primary w-50">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
