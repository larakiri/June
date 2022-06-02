<x-layout>
    <section class="px-6 py-8">
        
        <main class="max-w-lg mx-auto mt-10 bg-red-200 border border-blue-200 p-6 rounded-xl">
                <h1 class="text-center text-white-400 font-bold text-xl">Sign in</h1>
                
                <form method="POST" action="/login" class="mt-10">
                    
                    @csrf

                    <x-form.input name="email" type="email" autocomplete="username"/>
                    <x-form.input name="password" type="password" autocomplete="new-password"/>
                    <x-form.button>Sign in</x-form.button>
                </form>
        </main>
    </section>
</x-layout>