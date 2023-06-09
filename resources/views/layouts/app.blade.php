<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{$header }} {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                         {{ $header }}
                     
                        </h2>
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                     </div>
                     @if ($errors->any())
                     @foreach ($errors->all() as $error )
                     <div class="alert alert-danger">
                     <li>{{$error}}</li>
                     </div>
                     @endforeach
                       
                     @endif      
                     
                     

                     @if (session('success'))
                         <div class="alert alert-success">{{session('success')}}</div>
                     @endif
            {{ $slot }}
                  
                </div>
            </div>
              
          
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
