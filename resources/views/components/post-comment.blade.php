<x-panel class="bg-gray-50">

    <article class="flex space-x-4">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/60?u={{ $comment->author->email }}" alt="" class="rounded-xl" width="60" height="60">
        </div>

        <div>
            <header class="mb-4">
                <h3 class="font-bold">{{ $comment->author->name }}</h3>
                <p class="text-xs"><time>{{ $comment->created_at->diffForHumans() }}</time></p>

            </header>

            <p>
            {{ $comment->body }}
            </p>
        </div>
    </article>

</x-panel>

