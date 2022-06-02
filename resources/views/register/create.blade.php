<x-layout>
    <section class="px-6 py-8">
       
        <main class="max-w-lg mx-auto mt-10 bg-red-200 border border-blue-200 p-6 rounded-xl">
            <h2 class="text-center text-white-400 font-bold text-xl">We are waiting for you!</h1>
            <form method="POST" action="/register" class="mt-10">

            @csrf

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-us text-gray-700"
                    for="username"
                >
                    Username 
                </label>
            
            <input class="border border-gray-400 p-2 w-full"
                type="text"
                name="username"
                id="username"
                value="{{ old('username') }}"
                required
            >

            @error('username')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror

         </div>

         <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-us text-gray-700"
                    for="password"
                >
                    Password
            </label>
            
            <input class="border border-gray-400 p-2 w-full"
                type="password"
                name="password"
                id="password"
                required
                >

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror


        </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-us text-gray-700"
                    for="name"
                >
                Name
            </label>
            
            <input class="border border-gray-400 p-2 w-full"
                type="text"
                name="name"
                id="name"
                value="{{ old('name') }}"
                required
                >

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                </div>

                

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-us text-gray-700"
                    for="Email"
                >
                Email
            </label>
            
            <input class="border border-gray-400 p-2 w-full"
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
                required
                >

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                </div>

        <div class="mb-6">
                    <button type="submit"
                     class="bg-red-300 text-white rounded py-2 px-4 hover:bg-blue-500"  
            >
                    Submit 
            </button>
        </div>


            </form>
        </main>

    </section>
</x-layout>