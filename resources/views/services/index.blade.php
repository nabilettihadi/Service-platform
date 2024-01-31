<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Services</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gradient-to-b from-blue-700 via-blue-800 to-blue-900 p-8">
    <h1 class="text-4xl font-extrabold mb-8 text-center text-white">Explorez Nos Services</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach($services as $service)
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                <img src="{{ asset('services.webp') }}" alt="{{ $service->title }}" class="w-full h-48 object-cover object-center">
                
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-blue-700">{{ $service->title }}</h3>
                    <p class="text-gray-700 mb-2">{{ $service->description }}</p>
                    <p class="text-gray-700 mb-2">Catégorie: {{ $service->category }}</p>
                    <p class="text-gray-700 mb-4">Coût: {{ $service->cost }}</p>
                    <a href="{{ route('services.show', $service->id) }}" class="text-blue-300 hover:underline">Voir les détails</a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>

