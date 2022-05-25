                    @props(['comment'])
                    
                <x-panel class="bg-blue-50">
                    <article class="flex space-x-4">
                        <div class="flex-shrink-0">
                            <x-avatar source='{{ $comment->author->avatar }}' id='{{ $comment->user_id }}' class="rounded-xl" width="60" height="60" />
                        </div>

                        <div>
                            <header>
                                <h3 class="font-bold">{{ $comment->author->username }}</h3>
                                <p class="text-xs">
                                    Posted
                                    <time>{{ $comment->created_at->format('F j, Y, g:i a') }}</time>
                                </p>
                            </header>
                            <p>
                               {{ $comment->body }}
                            </p>
                        </div>
                    </article>
                </x-panel>