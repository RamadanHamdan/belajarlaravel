<x-layout :title="$title">
@foreach ($posts as $post)
<article class="py-8 max-w-3xl border-b border-gray-300">
    <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
    </a>
    <div class="text-base text-gray-500">
        By <a href="/authors/{{ $post->author->username }}" 
        class="text-gray-900 hover:underline">{{ $post->author->name }}</a> In <a 
        href="/categories/{{ $post->category->slug }}"
        class="text-gray-900 hover:underline">{{ $post->category->name }}</a> | 
        <time datetime="2024-01-01">12 Desember 2006</time>
    </div>
    <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}</p>
    <a href="/posts/{{ $post['slug'] }}" class="text-indigo-600 hover:underline">Read more...&raquo;</a>
</article>
@endforeach
</x-layout>