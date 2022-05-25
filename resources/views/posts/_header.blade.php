<header class="max-w-xl mx-auto mt-20 text-center">
            <h1 class="text-5xl">
                <span class="text-#FFF-400">Moments blog</span>
            </h1>

            <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
                <!--  Category -->
                <div class="relative lg:inline-flex bg-red-100 rounded-xl">
                    <x-category-dropdown />
                </div>

                <!-- Search -->
                <div class="relative flex lg:inline-flex items-center bg-red-100 rounded-xl px-4 py-2">
                    <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <input  type="text" 
                        name="search" 
                        placeholder="Involve!"
                        class="bg-transparent placeholder-black font-semibold text-sm"
                        value="{{ request('search') }}"
                        >
                    </form>
                </div>
            </div>
        </header>