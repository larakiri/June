@props(['post'])

<article class="transition-colors duration-300 hover:bg-gray-200 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl col-span-3">
    <div class="py-6 px-5 lg:grid lg:grid-cols-2 ">
        <div class="lg:mr-8 flex">
            <x-thumbnail source='{{ $post->thumbnail }}' id='{{ $post->id }}' />
        </div>

        <div class=" flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <x-category-button :category="$post->category" />
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl truncate">
                        <a href="/posts/{{$post->slug}}">
                            {{ $post->title }}
                        </a>
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2 space-y-4 box-border h-36 overflow-y-auto">
                {!! $post->excerpt !!}
            </div>

            <footer class="flex justify-between items-center mt-2">
                <div class="flex items-center text-sm">
                    <x-avatar source='{{ $post->author->avatar }}' id='{{ $post->user_id }}' class="rounded-xl mb-6 ml-6 mt-6" width="60"/>
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                        </h5>
                    </div>
                </div>

                <div class="hidden lg:block flex-shrink-0">
                    <a href="/posts/{{ $post->slug }}" class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>