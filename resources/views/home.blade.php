<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </head>
    <body>
        @auth
        <div class="container rounded-2">
            <h2 class="text-center">Congrats you are logged in.</h2>
            <img src="{{ asset('images/cat.png') }}" alt="ninja cat" class="rounded mx-auto d-block">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, ducimus. Esse sed tenetur numquam nobis quam sint placeat praesentium blanditiis explicabo distinctio aspernatur enim, nihil quae vel tempore iure doloribus!
            </p>
            <form action="/logout" method="post">
                @csrf
                <button class="btn btn-outline-primary">Log out</button>
            </form>
        </div>

        <div class="container">
            <h2>Create a new post</h2>
            <form action="/create-post" method="post">
                @csrf
                <label for="title" form-label>Título:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="post title"> 
                <textarea name="body" id="body" style="height: 100px" placeholder="body content..." class="form-control mt-3"></textarea>
                <button class="btn btn-outline-primary mt-3">Save Post</button>
            </form>
        </div>
        
        <div class="container">
            <h2 class="text-center">All Posts</h2>
            @foreach ($posts as $post)
                <div class="container p-10 m-10">
                    <h3>{{$post['title']}} by {{$post->user->name}}</h3>
                    {{$post['body']}}
                    <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
                    <form action="/delete-post/{{$post->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-primary">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
        @else
        <div class="container-md w-50 mt-5 border rounded p-5">
            <h1 class="text-center border-bottom mb-5">Register</h1>
            <form action="/register" method="post" class="d-flex flex-column justify-content-center mb-3">
                @csrf
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="name"> 
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="password">
                <button class="btn btn-outline-primary mt-3 w-25 mx-auto">Register</button>
            </form>
            <p><a href="/login-user">Iniciar sesión</a></p> <!--Prueba-->
        </div>
        <!--<div class="container">
            <h1 class="text-center">Login</h1>
            <form action="/login" method="post">
                @csrf
                <label for="name" form-label>Nombre:</label>
                <input type="text" name="loginname" id="name" class="form-control" placeholder="name"> 
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="loginpassword" id="password" class="form-control" placeholder="password">
                <button class="btn btn-outline-primary mt-3">Log in</button>
            </form>
        </div>-->
        @endauth
        
        <script src="" async defer></script>
    </body>
</html>