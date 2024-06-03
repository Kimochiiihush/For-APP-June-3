<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
    <div class="container mx-auto p-4">
        <header class="flex items-center justify-between py-6">
            <div class="text-2xl font-bold">Brand Logo</div>
            @if (Route::has('login'))
                <nav class="flex space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-3 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="px-3 py-2 bg-gray-200 text-gray-900 rounded-md hover:bg-gray-300 transition">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-3 py-2 bg-gray-200 text-gray-900 rounded-md hover:bg-gray-300 transition">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <main class="mt-10 grid gap-6 lg:grid-cols-2">
            <a href="https://laravel.com/docs" class="block p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition">
                <div class="flex items-center space-x-4">
                    <img src="https://laravel.com/assets/img/welcome/docs-light.svg" alt="Laravel documentation" class="w-16 h-16">
                    <div>
                        <h2 class="text-xl font-semibold">Documentation</h2>
                        <p class="mt-2 text-gray-600">Comprehensive documentation covering every aspect of the framework.</p>
                    </div>
                </div>
            </a>

            <a href="https://laracasts.com" class="block p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition">
                <div class="flex items-center space-x-4">
                    <img src="https://laravel.com/assets/img/welcome/docs-light.svg" alt="Laracasts" class="w-16 h-16">
                    <div>
                        <h2 class="text-xl font-semibold">Laracasts</h2>
                        <p class="mt-2 text-gray-600">Thousands of video tutorials on Laravel, PHP, and JavaScript.</p>
                    </div>
                </div>
            </a>

            <a href="https://laravel-news.com" class="block p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition">
                <div class="flex items-center space-x-4">
                    <img src="https://laravel.com/assets/img/welcome/docs-light.svg" alt="Laravel News" class="w-16 h-16">
                    <div>
                        <h2 class="text-xl font-semibold">Laravel News</h2>
                        <p class="mt-2 text-gray-600">Stay up-to-date with the latest news in the Laravel ecosystem.</p>
                    </div>
                </div>
            </a>

            <div class="block p-6 bg-white rounded-lg shadow-lg hover:shadow-xl transition">
                <div class="flex items-center space-x-4">
                    <img src="https://laravel.com/assets/img/welcome/docs-light.svg" alt="Community" class="w-16 h-16">
                    <div>
                        <h2 class="text-xl font-semibold">Community</h2>
                        <p class="mt-2 text-gray-600">Join the vibrant community and connect with other developers.</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
