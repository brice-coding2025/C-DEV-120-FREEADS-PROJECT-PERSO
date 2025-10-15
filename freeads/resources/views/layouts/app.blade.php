<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freeads</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-white shadow p-4 flex justify-between">
        <h1 class="text-xl font-bold text-blue-600">Freeads</h1>
        <div>
            @auth
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button class="text-red-600">Déconnexion</button>
                </form>
            @else
                <a href="{{ route('login.form') }}" class="mr-4 text-blue-500">Connexion</a>
                <a href="{{ route('register.form') }}" class="text-blue-500">Inscription</a>
            @endauth
        </div>
    </nav>

    <main class="p-6">
        @yield('content')
    </main>
</body>
</html>
