<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-3">
            <div class="flex justify-between items-center">
                <a href="#" class="text-xl font-bold text-gray-700">Simple Blog</a>
                <div>
                    <a href="#" class="text-gray-600">Login</a>
                    <a href="#" class="ml-4 text-gray-600">Register</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <main class="container mx-auto mt-6">
        <!-- Dynamic Content Here -->
        <div id="content"></div>
    </main>
</body>
</html>
