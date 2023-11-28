<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Argentina Programa - PHP Avanzado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        main {
            min-height: 77vh;
        }

        main h1 {
            text-align: center;
        }

        footer {
            min-height: 5vh;
            background-color: rgb(0, 3, 60);
            color: aliceblue;
            display: flex;
            justify-content: center;
            text-align: center;
        }

        .contenedor {
            display: flex;
            justify-content: space-around;

        }

        .border {
            height: 369px;
            width: 290px;
            background: transparent;
            border-radius: 10px;
            transition: border 1s;
            position: relative;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: aliceblue;
        }

        .card-body li a{
            color: blue;
        }

        h3 a,
        p a{
            color: blue;
        }

        .detalles {
            display: flex;
            justify-content: space-around;
        }

        h2 {
            color: aliceblue;
            background: linear-gradient(90deg, rgba(70, 6, 107, 1) 0%, rgba(12, 20, 94, 1) 70%);
            border-radius: 10px;
        }

        .formulario {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="https://github.com/napzalav" target="_blank"><i class="fa-brands fa-github" style="font-size: 30px;
                margin-left: 5px;
            "></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/titulares" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Titulares</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/titulares/create">Crear Titular</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/titulares">VER TODOS LOS TITULARES</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Automotores</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/automotores/create">Crear Automotor</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/automotores">VER TODOS LOS AUTOMOTORES</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/infracciones" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Infracciones</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/infracciones/create">Crear Infracción</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/infracciones">VER TODAS LAS INFRACCIONES</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div>
                <form class="form-inline my-2 my-lg-0" style="display: flex">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>

    <main>
        <div>
            <h1>@yield('title')</h1>
        </div>

        <div class="contenedor">
            @yield('content')
        </div>

        @yield('formulario')

    </main>

    <footer>
        <div>
            <a href="https://github.com/napzalav" target="_blank">Cesar Alavila</a>
            <p>Hecho en casa con ❤</p>
            <p>Todos los derechos reservados ©</p>
            <p>...Los izquierdos tambien!</p>
            <p>
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </p>
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/26e2502ee4.js" crossorigin="anonymous"></script>
</body>

</html>
