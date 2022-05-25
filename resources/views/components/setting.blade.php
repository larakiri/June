@props(['heading'])

<section class="py-2 max-w-2xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-4 border-b"> 
        {{ $heading }}
    </h1>

    <div class="flex">
            <aside class="w-20 flex-shrink-0">
                <h4 class="font-semibold mb-4">Links</h4>
                    <ul>
                        <li>
                            <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-red-500' : '' }}">All Posts</a>
                        </li>

                        <li>
                            <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-red-500' : '' }}">New Post</a>
                        </li>
                        <li>
                        <a href="/admin/{{ auth()->user()->username }}/followings" class="{{ request()->is('/admin/' . auth()->user()->username . '/followings') ? 'text-blue-500' : ''}}">Followings</a>
                        </li>

                    </ul>
            </aside>

        <main class="flex-1">
            <x-panel>
                {{ $slot }}
             </x-panel>
        </main>
    </div>
</section>