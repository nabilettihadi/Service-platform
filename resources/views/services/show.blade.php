<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Service</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</head>

<body class="bg-gradient-to-b from-blue-500 via-blue-700 to-blue-900 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0">
                    <img src="{{ asset('logo.png') }}" alt="Logo" class="block h-9 w-auto fill-current text-gray-800">
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <a href="{{ route('services.index') }}" class="text-gray-500 hover:text-gray-700">Services</a>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Settings Dropdown -->
            @if(auth()->check())
                <div x-data="{ isOpen: false }" class="hidden sm:flex sm:items-center sm:ms-6">
                    <div class="relative">
                        <button @click="isOpen = !isOpen" class="flex items-center space-x-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                            <div>{{ Auth::user()->name }}</div>
                            <div>
                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                </svg>
                            </div>
                        </button>

                        <div x-show="isOpen" @click.away="isOpen = false" class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:outline-none">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <a href="{{ route('register') }}" class="text-gray-500 hover:text-gray-700">Register</a>
                    <a href="{{ route('login') }}" class="text-gray-500 hover:text-gray-700 ml-4">Login</a>
                </div>
            @endif
        </div>
    </nav>

    <div class="flex items-center justify-center h-screen">
        <div class="max-w-md w-full bg-white p-6 rounded-md shadow-md">
            <h1 class="text-3xl font-bold mb-6 text-blue-900">Détails du Service</h1>

            <h3 class="text-xl font-bold mb-2 text-blue-700">{{ $service->title }}</h3>
            <p class="text-gray-700 mb-4">{{ $service->description }}</p>

            <div class="mb-4">
                <span class="text-gray-600">Catégorie:</span>
                <p class="text-gray-800">{{ $service->category }}</p>
            </div>

            <div class="mb-4">
                <span class="text-gray-600">Coût:</span>
                <p class="text-gray-800">{{ $service->cost }}</p>
            </div>
            
            <div class="mb-4">
                <span class="text-gray-600">Fournisseur:</span>
                <p class="text-gray-800">{{ $service->user->name }}</p>
            </div>

            <div class="mb-4">
                <span class="text-gray-600">Contact:</span>
                <a href="mailto:{{ $service->user->email }}" class="text-blue-500 hover:underline">{{ $service->user->email }}</a>
            </div>

            <a href="{{ route('services.index') }}" class="block text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue transition duration-300">
                Retour
            </a>
        </div>
    </div>
</body>

</html>
