<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-gray-300">
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto">
            <a href="{{ route('tasks.index') }}" class="text-lg font-semibold">Task Management</a>
            @auth
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="ml-4 bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Logout</button>
                </form>
            @endauth
            @guest
                <a href="{{ route('login') }}" class="ml-4 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</a>
                <a href="{{ route('register') }}" class="ml-4 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Register</a>
            @endguest
        </div>
    </nav>
    <div class="container mx-auto py-8">
        @if (session('success'))
            <div class="bg-green-500 text-white p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-500 text-white p-2 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
