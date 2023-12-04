<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        @include('layouts.navigation')

        @if (session()->has('error'))
            <x-notification
                :message="session('error')"
                title="Error!"
                type="error"
            />
        @endif

        @if (session()->has('success'))
            <x-notifgication
                :message="session('success')"
                title="Success!"
                type="success"
            />
        @endif

        <div class="min-h-screen bg-gray-100">
            <main>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-3xl">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>