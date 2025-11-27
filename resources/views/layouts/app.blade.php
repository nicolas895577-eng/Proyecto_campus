<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title','Reservación de espacios')</title>

<script src="https://cdn.tailwindcss.com"></script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
    body {
        font-family: 'Inter', sans-serif;
        background-color: #f7f9fc;
    }
    .form-control, .btn {
        border-radius: 0.5rem;
        transition: all 0.2s;
    }
    .btn {
        font-weight: 600;
    }
</style>


</head>
<body>
<nav class="bg-white shadow-md">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between h-16">
<div class="flex">
<a class="flex-shrink-0 flex items-center text-xl font-bold text-indigo-600 tracking-wider"
href="{{ route('welcome') }}">
SedeApp
</a>
</div>
<div class="flex items-center space-x-4">
<a href="{{ route('espacios.index') }}"
class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
Espacios
</a>
<a href="{{ route('reservas.index') }}"
class="text-gray-600 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
Reservas
</a>
</div>
</div>
</div>
</nav>

<main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    @if(session('success'))
        <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-700 shadow-lg border border-green-200" role="alert">
            <div class="flex items-center justify-between">
                <span>{{ session('success') }}</span>
                <button type="button" class="text-green-700 hover:text-green-900 font-bold" 
                        onclick="this.parentElement.parentElement.style.display='none';" aria-label="Close">
                    &times;
                </button>
            </div>
        </div>
    @endif

    <div class="bg-white p-6 sm:p-8 rounded-lg shadow-xl">
        @yield('content')
    </div>
</main>


</body>
</html>