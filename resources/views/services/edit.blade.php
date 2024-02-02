<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Service</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
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

            <!-- Hamburger -->
            <div x-data="{ isOpen: false }" class="-me-2 flex items-center sm:hidden">
                <button @click="isOpen = !isOpen" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <div x-show="isOpen" @click.away="isOpen = false" class="absolute top-16 right-0 mt-2 w-48 bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg">
                    <a href="{{ route('services.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Services</a>
                    <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:outline-none">
                            Logout
                        </button>
                    </form>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <a href="{{ route('services.index') }}" class="text-gray-500 hover:text-gray-700">Services</a>
            </div>

            <!-- Settings Dropdown -->
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
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow flex items-center justify-center mt-8">
        <div class="max-w-md w-full bg-white p-6 rounded-md shadow-md">
            <h1 class="text-3xl font-extrabold mb-6 text-gray-800 text-center">Modifier le Service</h1>

            <form action="{{ route('services.update', $service->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Titre:</label>
                    <input type="text" name="title" value="{{ $service->title }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                    <textarea name="description" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>{{ $service->description }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Catégorie:</label>
                    <input type="text" name="category" value="{{ $service->category }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
                </div>

                <div class="mb-4">
                    <label for="cost" class="block text-gray-700 text-sm font-bold mb-2">Coût:</label>
                    <input type="number" name="cost" value="{{ $service->cost }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
                </div>
                <div class="flex items-center justify-between mt-4">
                    <a href="{{ route('services.index') }}" class="text-center bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue transition duration-300">
                        Retour
                    </a>
                
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                        Enregistrer
                    </button>
                </div>
                
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>
</html>

