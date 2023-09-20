<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-headweb>
        </x-headweb>
        <!-- Scripts -->
        {{-- @routes --}}
        @vite(['resources/js/app.js'])
        {{-- @inertiaHead --}}
    </head>
    <body class="antialiased">
        <x-scriptsweb>
        </x-scriptsweb>

        <x-headerweb>
        </x-headerweb>
        {{-- @inertia --}}
        @yield('content')

        <x-footerweb>
        </x-footerweb>

        @yield('script')
    </body>
</html>
