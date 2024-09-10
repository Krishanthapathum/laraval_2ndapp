<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="container">
    <div class="col-4 mt-5">
    <form action="{{ route('storeStudent')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Student First Name</label>
          <input type="text" class="form-control" name="firstName" aria-describedby="nameHelp" placeholder="Enter First Name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Last Name</label>
            <input type="text" class="form-control" name="lastName" aria-describedby="nameHelp" placeholder="Enter Last Name">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Contact Number</label>
            <input type="text" class="form-control" name="contactNumber" aria-describedby="nameHelp" placeholder="Enter Contact Number">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Address</label>
            <input type="text" class="form-control" name="address" aria-describedby="nameHelp" placeholder="Enter Address">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Student Birth day</label>
            <input type="text" class="form-control" name="bod" aria-describedby="nameHelp" placeholder="Enter Birthday">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>
