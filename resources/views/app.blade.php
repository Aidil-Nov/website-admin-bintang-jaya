<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
    </body>

</html>