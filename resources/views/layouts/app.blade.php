<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - Livewire</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    @livewireStyles
</head>

<body class="antialiased md:bg-gray-100 bg-purple-700">
    <div class="text-center mt-3">
        <div class="inline-flex" id="main_menu">
            <ul class="flex flex-wrap p-1 md:p-2 sm:bg-gray-300 sm:rounded-full text-sm md:text-base" id="menu_nav">
                <li class="relative mx-1 px-4 py-2 group bg-gray-300 rounded-full mb-1 md:mb-0" id="button_home">
                    <a class="font-semibold whitespace-no-wrap text-gray-600 hover:text-blue-800" href="/counter">
                        <span class="last firstlevel">Contador</span>
                    </a>
                </li>
                <li class="relative mx-1 px-4 py-2 group bg-gray-300 rounded-full mb-1 md:mb-0" id="button_admin">
                    <a class="font-semibold whitespace-no-wrap text-gray-600 hover:text-blue-800" href="/contact">
                        <span class="firstlevel">Formulario de Contacto</span>
                    </a>
                </li>
                <li class="relative mx-1 px-4 py-2 group bg-gray-300 rounded-full mb-1 md:mb-0" id="button_home">
                    <a class="font-semibold whitespace-no-wrap text-gray-600 hover:text-blue-800" href="/dropdown/create">
                        <span class="last firstlevel">Selects anidados</span>
                    </a>
                </li>
                <li class="relative mx-1 px-4 py-2 group bg-gray-300 rounded-full mb-1 md:mb-0" id="button_home">
                    <a class="font-semibold whitespace-no-wrap text-gray-600 hover:text-blue-800" href="/dropdown/search">
                        <span class="last firstlevel">Dropdown de busquedas</span>
                    </a>
                </li>
                <li class="relative mx-1 px-4 py-2 group bg-gray-300 rounded-full mb-1 md:mb-0" id="button_home">
                    <a class="font-semibold whitespace-no-wrap text-gray-600 hover:text-blue-800" href="/select2">
                        <span class="last firstlevel">Select2 con livewire</span>
                    </a>
                </li>
                <li class="relative mx-1 px-4 py-2 group bg-gray-300 rounded-full mb-1 md:mb-0" id="button_moderate">
                    <a class="font-semibold whitespace-no-wrap text-gray-600 hover:text-blue-800" href="/datatable">
                        <span class="">Datatables</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <main class="container mx-auto">
        @yield('content')
    </main>

    <livewire:scripts />

    @yield('scripts')
</body>

</html>