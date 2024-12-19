<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My really cool website</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans text-dark dark:text-light">
        <x-background />
        {{-- selection:bg-[#F04C01] selection:text-light --}}
        <div class="bg-transparent min-h-screen flex flex-col items-center justify-center">
            <header class="fixed top-0 w-4/5 my-10 border-b-2 border-dark dark:border-light rounded-sm">
                <div class="flex justify-evenly relative top-0.5">
                    <a class="px-1 hover:text-light hover:bg-dark dark:hover:text-dark dark:hover:bg-light" href="/bits">bits</a>
                    <a class="px-1 hover:text-light hover:bg-dark dark:hover:text-dark dark:hover:bg-light" href="/bytes">bytes</a>
                    <a class="px-1 hover:text-light hover:bg-dark dark:hover:text-dark dark:hover:bg-light" href="/life">life</a>
                    <a class="px-1 hover:text-light hover:bg-dark dark:hover:text-dark dark:hover:bg-light" href="/me">about me</a>
                </div>
                {{-- @if (Route::has('login'))
                    <livewire:welcome.navigation />
                @endif --}}
            </header>

            {{-- TODO: Replace drop-shadow with filter over the bg svg? --}}
            <main class="w-full max-w-2xl px-6 mt-6 flex flex-col items-center pointer-events-none">
                <div class="z-10">
                    <span class="text-8xl">Jaden Hoenes</span>
                    <div class="text-sm text-right">(bonus with an h)</div>
                </div>
            </main>

            <footer class="fixed bottom-0 py-16 text-center text-sm pointer-events-none">
                My footer copyright ja boi 2024
            </footer>
        </div>
    </body>
</html>
