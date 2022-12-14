<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/00b1bb4332.js" crossorigin="anonymous"></script>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="icon" href="/images/icon1.png">
    <title>Ask-fm</title>
</head>

<body class="d-md-flex flex-column min-vh-100">

    {{$slot}}

    @if (session()->has('success'))
    <div class="d-flex fixed-bottom justify-content-end">
        <p class="bg-danger mx-2 px-3 py-1 rounded-pill text-white">{{ session('success') }}</p>
    </div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="js/app.js"></script>
</body>

</html>