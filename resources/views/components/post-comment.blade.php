<article class="flex bg-gray-100 p-6 border border-gray-200 rounded-xl space-x-4">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?u={{ $comment->author->email }}" alt="" class="rounded-xl" width="60" height="60">
    </div>

    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->author->name }}</h3>
            <p class="text-xs"><time>{{ $comment->created_at }}</time></p>

        </header>

        <p>
        {{ $comment->body }}
        </p>
    </div>
</article>
