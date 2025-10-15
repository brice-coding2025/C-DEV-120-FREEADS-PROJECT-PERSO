@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white shadow p-6 rounded">
    <h2 class="text-2xl font-bold mb-4">Inscription</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="login" class="block mb-1">Login</label>
            <input type="text" name="login" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-3">
            <label for="email" class="block mb-1">Email</label>
            <input type="email" name="email" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-3">
            <label for="phone_number" class="block mb-1">Téléphone</label>
            <input type="text" name="phone_number" class="w-full border p-2 rounded">
        </div>
        <div class="mb-3">
            <label for="password" class="block mb-1">Mot de passe</label>
            <input type="password" name="password" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="block mb-1">Confirmation</label>
            <input type="password" name="password_confirmation" class="w-full border p-2 rounded" required>
        </div>
        <button class="bg-blue-600 text-white px-4 py-2 rounded">S’inscrire</button>
    </form>
</div>
@endsection

