<!doctype html>

<title>Weird blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


<body style="font-family: Open Sans, sans-serif">
    <style>
        html {
                scroll-behavior: smooth;
             }
    </style>
        <header class="bg-gray-200 rounded-xl py-2 px-4">
        <section class="px-2 py-4">
            <nav class="md:flex md:justify-between md:items-center">
                <div>
                    <button class="text-xs font-semibold text-white uppercase py-1 bg-red-300 rounded-xl text-center">
                        <a href="/">home
                            <img src="/images/def.svg" width="200" alt="logo" >
                        </a>
                    </button>
                </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="bg-red-300 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">Welcome, {{ auth()->user()->name }}</button>
                    </x-slot>

                @admin
                <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">Dashboard</x-dropdown-item>
                <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
                <x-dropdown-item href="/admin/{{ auth()->user()->username }}/followings" :active="request()->is('/admin/'. auth()->user()->username . '/followings')">Followings</x-dropdown-item>

                @endadmin

                <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log out</x-dropdown-item>
                
                    <form id="logout-form" method="POST" action="/logout" class="hidden">
                @csrf
                    </form>
                </x-dropdown>


                @else

                <a href="/register" class="text-xs font-bold uppercase {{ request()->is('register') ? 'text-red-300' : '' }}">Register</a>
                <a href="/login" class="ml-6 text-xs font-bold uppercase {{ request()->is('login') ? 'text-red-300' : '' }}">Log In</a>

                @endauth

                <a href="#tobottom" class="bg-red-300 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    go down
                </a>
            </div>
        </nav>
    </header>

        {{ $slot }}

            <footer id="tobottom" class="bg-gray-200 rounded-xl text-right mt-20">
                <a href="#tobottom" class="hidden">
                    Smooth
                </a>                  
            </footer>
        </section>
    <x-flash />
</body>

