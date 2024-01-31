<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Service</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gradient-to-b from-blue-500 via-blue-700 to-blue-900 min-h-screen flex items-center justify-center">
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

        <a href="{{ route('services.index') }}" class="block text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue transition duration-300">
            Retour
        </a>
    </div>
</body>
</html>



