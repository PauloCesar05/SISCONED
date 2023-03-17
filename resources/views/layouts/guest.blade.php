<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 form-group col-6" style="background-color:#DDDDDD;">
        <img src="{{ url('images/DGETI.png') }}" width="400" height="400"><br>
        <div class="w-full sm:max-w-md mt-6 px-6 py-6 bg-white shadow-md overflow-hidden sm:rounded-lg" style="background-color: #5E2A2A; border-radius: 22px 22px 0px 0px; -webkit-box-shadow: 19px 10px 7px 5px rgba(101,101,101,0.40); -moz-box-shadow: 19px 10px 7px 5px rgba(101,101,101,0.4); box-shadow: 19px 10px 7px 5px rgba(101,101,101,0.4);"></div>
            <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden" style="border-radius: 0px 0px 39px 22px; -webkit-box-shadow: 19px 18px 7px 5px rgba(101,101,101,0.4); -moz-box-shadow: 19px 18px 7px 5px rgba(101,101,101,0.4); box-shadow: 19px 18px 7px 5px rgba(101,101,101,0.4);">
        
            
                {{ $slot }}
            </div>
            
        </div>
    </body>
</html>
