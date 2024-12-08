<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-900">
       <div class="flex flex-row gap-8 justify-center m-5 p-5">
            <x-primary-button><a href="/">Home</a></x-primary-button>
            <x-primary-button><a href="#">Dashboard</a></x-primary-button>
            <x-primary-button><a href="{{route('login')}}">Login</a></x-primary-button>
            <x-primary-button><a href="{{route('register')}}">Register</a></x-primary-button>
       </div>

        <livewire:login />

        <livewire:welcome />


    </body>
</html>
