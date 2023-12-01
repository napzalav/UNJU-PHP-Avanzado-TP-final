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

    {{-- si quiero usar el navbar de Laravel debo descomentar las fuentes y el script para el estilo de Vite--}}
    <!-- Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <style>
        main {
            min-height: 77vh;
        }

        main h1 {
            text-align: center;
        }

        a.nav-link.active,
        {
            padding: 20px;
        }

        a.nav-link.dropdown-toggle{
            padding: 5px;
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

        .card-body li a {
            color: blue;
        }

        h3 a,
        p a {
            color: blue;
        }

        .detalles {
            display: flex;
            justify-content: space-around;
        }

        h2 {
            font-size: 30px;
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
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
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
        </nav>


        {{-- Navbar usando plantilla breeze --}}

        {{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">

                            <a class="navbar-brand" href="https://github.com/napzalav" target="_blank">
                                <i class="fa-brands fa-github"
                                    style="
                                    font-size: 30px;
                                    margin-left: 5px;
                                    ">
                                </i>
                            </a>
                        </div>

                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav-link>

                            <ul class="navbar-nav mr-auto"
                                style="display: flex;align-items: center;flex-direction: row;">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/titulares" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">Titulares</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/titulares/create">Crear Titular</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="/titulares">VER TODOS LOS TITULARES</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">Automotores</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/automotores/create">Crear Automotor</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="/automotores">VER TODOS LOS AUTOMOTORES</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="/infracciones" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">Infracciones</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/infracciones/create">Crear Infracción</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="/infracciones">VER TODAS LAS INFRACCIONES</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    <!-- Hamburger -->
                    <div class="-me-2 flex items-center sm:hidden">
                        <button @click="open = ! open"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-responsive-nav-link>
                </div>

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            </div>
        </nav> --}}


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

{{-- APUNTES --}}

{{-- PARA EL BUSCADOR --}}
{{-- <div>
                <form class="form-inline my-2 my-lg-0" style="display: flex">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <form class="form-inline my-2 my-lg-0" style="display: flex" action="{{ route('search') }}" method="GET">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" name="query">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div> --}}
