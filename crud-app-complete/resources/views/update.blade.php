<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

    <div class="container mt-5">
        <div class="row text-center text-primary mt-5">
            <h1>Update Employee Data</h1>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-6 border rounded-3 shadow">
                <form action="{{ url('update') }}" method="POST">
                    @csrf
                    <div class="mb-3 mt-5">
                        <input type="hidden" class="form-control" name="id" value="{{ $data[0]->id }}">
                    </div>
                    <div class="mb-3 mt-5">
                        <input type="text" class="form-control" name="name" value="{{ $data[0]->name }}">
                    </div>
                    <div class="my-3">
                        <input type="number" class="form-control" name="age" value="{{ $data[0]->age }}">
                    </div>
                    <div class="my-3">
                        <input type="number" class="form-control" name="salary" value="{{ $data[0]->salary }}">
                    </div>
                    <div class="my-3 text-center">
                        <button type="submit" class="btn btn-primary w-50">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
