<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel Multiple Authentication Using Guard</title>
</head>

<body class="antialiased">
    <div>
        <h1 style="text-align: center; margin-top:5%;">Laravel 8 Multiple Authentication Using Guard
        </h1>
    </div>

    <div style="text-align: center; font-size:25px"
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @else
            <a href="{{ url('login/admin') }}" class="text-gray-700 dark:text-gray-500 underline"
                style="margin-right:30px">Admin Log in</a>


            <a href="{{ url('login/blogger') }}" class="text-gray-700 dark:text-gray-500 underline"
                style="margin-right:30px">Blogger Log in</a>



            <a href="{{ url('register/blogger') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"
                style="margin-right:30px">Blogger
                Register</a>


            @endauth
        </div>

    </div>

    @yield('content')
</body>

</html>