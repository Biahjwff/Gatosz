<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-cover bg-center min-h-screen bg-no-repeat" style="background-image: url('{{ asset('imgs/fundoCrud.png') }}')">
        <div class="flex justify-start mt-2">
            <a href="" class=" bg-white px-5 py-1 rounded-r-lg text-marrom-escuro shadow-md shadow-marrom-escuro">Home</a>
        </div>
        
        <div class="flex flex-col justify-center items-center min-h-screen">
           
            {{-- EStilização do formulário --}}
            <div class="bg-white px-12 py-5 rounded-3xl text-marrom-escuro shadow-md shadow-marrom-escuro">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
