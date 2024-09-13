<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-6">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-6">Create New Post</h2>
            <form>
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Title:</label>
                    <input type="text" id="title" class="w-full p-2 border rounded">
                </div>
                <div class="mb-4">
                    <label for="body" class="block text-gray-700">Content:</label>
                    <textarea id="body" class="w-full p-2 border rounded"></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Create</button>
            </form>
        </div>
    </div>
</body>
</html>
