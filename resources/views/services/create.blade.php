<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un Nouveau Service</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gradient-to-b from-blue-500 via-blue-700 to-blue-900 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full bg-white p-6 rounded-md shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Créer un Nouveau Service</h1>

        <form action="{{ route('services.store') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Titre:</label>
                <input type="text" name="title" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                <textarea name="description" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
            </div>

            <div class="mb-4">
                <label for="category" class="block text-gray-700 text-sm font-bold mb-2">Catégorie:</label>
                <input type="text" name="category" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="cost" class="block text-gray-700 text-sm font-bold mb-2">Coût:</label>
                <input type="number" name="cost"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">
            </div>

            <button type="submit"
                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                Enregistrer
            </button>
        </form>
    </div>
</body>
</html>

