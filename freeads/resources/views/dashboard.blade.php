@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto bg-white shadow p-6 rounded text-center">
    <h2 class="text-2xl font-bold mb-4">Bienvenue, {{ Auth::user()->login }} 👋</h2>
    <p class="text-gray-600">Vous êtes connecté sur Freeads.</p>
</div>
@endsection
