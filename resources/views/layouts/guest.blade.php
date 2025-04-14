<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>UNEP-EWAD NEWSLETTER</title>
        <link rel="icon" href="https://www.unep.org/themes/custom/UNEP_3Spot/favicon.ico" type="image/vnd.microsoft.icon" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div style="height:auto;width:10%;">
                <a href="{{ config('app.url', 'Laravel') }}">
                    <img src="https://www.fao.org/images/corporatelibraries/fao-logo/fao-logo-en.svg?sfvrsn=f64522b4_36" title="Food and Agriculture Organization of the United Nations" data-displaymode="Original" alt="Food and Agriculture Organization of the United Nations" class="header-fao-logo">
                   
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
