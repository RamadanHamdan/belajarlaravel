<x-layout :title="$title">
<article class="py-8 max-w-3xl">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
    <div class="text-base text-gray-500">
        <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a> | <time datetime="2024-01-01">{{ $post['date'] }}</time>
    </div>
    <p class="my-4 font-light">{{ $post['body'], 150 }}</p>
    <a href="/posts" class="text-indigo-600 hover:underline">Back to all posts&laquo;</a>
</article>
</x-layout>