<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    </head>

    <body class="bg-gray-100">
        <div class="flex">
            @include('components.navbar')

            <!-- Main Content -->
            <div class="flex-1 ml-64">
                <main class="p-6">
                    @yield('content')
                </main>
            </div>
        </div>

        @stack('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    </body>

</html>