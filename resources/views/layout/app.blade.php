<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <title>PostyClone</title>
</head>
<body class="bg-gray-200">
    <nav class="p-5 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="#" class="p-3">Home</a>
            </li>
            <li>
                <a href="#" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="#" class="p-3">Post</a>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
            <li>
                <a href="#" class="p-3">{{ auth()->user()->username }}</a>
            </li>
            <li>
                <a href="{{ route('logout') }}" class="p-3">Logout</a>
            </li>
            @endauth

            @guest
            <li>
                <a href="{{ route('register') }}" class="p-3">Register</a>
            </li>
            <li>
                <a href="{{ route('login') }}" class="p-3">Login</a>
            </li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>