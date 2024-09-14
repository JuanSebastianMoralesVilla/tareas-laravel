<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title> 📚 MIS TAREAS</title>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            maring: 0;
            padding: 0;
            font-family: sans-serif;

        }
        

        .color-container {
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4px;


        }

        a {
            text-decoration: none;
        }
    </style>


</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">✅Mis Tareas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('todos')}}">✏️Tareas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('categories.index')}}">🤖Categorias</a>
                    </li>   
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

</body>

</html>