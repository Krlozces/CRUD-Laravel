<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-md w-50 mt-5 border rounded p-5">
        <h1 class="text-center">Login</h1>
        <form action="/login" method="post" class="d-flex flex-column justify-content-center mb-3">
            @csrf
            <label for="name" form-label>Nombre:</label>
            <input type="text" name="loginname" id="name" class="form-control" placeholder="name"> 
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="loginpassword" id="password" class="form-control" placeholder="password">
            <button class="btn btn-outline-primary mt-3 w-25 mx-auto">Log in</button>
        </form>
    </div>
</body>
</html>