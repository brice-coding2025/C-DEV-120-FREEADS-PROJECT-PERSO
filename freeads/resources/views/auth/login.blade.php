@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white shadow p-6 rounded">
    <h2 class="text-2xl font-bold mb-4">Connexion</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="login" class="block mb-1">Login</label>
            <input type="text" name="login" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-3">
            <label for="password" class="block mb-1">Mot de passe</label>
            <input type="password" name="password" class="w-full border p-2 rounded" required>
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded">Se connecter</button>
    </form>
</div>
@endsection
