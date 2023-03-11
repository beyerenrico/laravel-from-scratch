@props(['post'])

<article class="flex flex-col lg:flex-row items-stretch gap-8 p-4 -m-4 transition hover:bg-gray-100 rounded-2xl">
    <div class="relative w-full">
        <a href="/posts/{{ $post->slug }}">
            <img src="https://picsum.photos/seed/{{ $post->slug }}/800/300" alt="" class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
        </a>
    </div>
    <div class="max-w-xl flex flex-col justify-between">
        <div>
            <div class="mt-4 lg:mt-8 flex items-center gap-x-4 text-xs">
                <time datetime="{{ date('Y-m-d', strtotime($post->created_at)) }}" class="text-gray-500">Published {{ $post->created_at->diffForHumans() }}</time>
                <a href="/categories/{{ $post->category->slug }}" class="relative z-10 rounded-full bg-gray-50 py-1.5 px-3 font-medium text-gray-600 hover:bg-gray-100">{{ $post->category->name  }}</a>
            </div>
            <div class="group relative mb-auto">
                <h2 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                    <a href="/posts/{{ $post->slug }}">
                        <span class="absolute inset-0"></span>
                        {{ $post->title }}
                    </a>
                </h2>
                <p class="mt-5 text-sm leading-6 text-gray-600 line-clamp-3">{{ $post->excerpt }}</p>
            </div>
        </div>
        <div class="relative my-4 lg:my-8 flex items-center gap-x-4">
            <img src="https://api.dicebear.com/5.x/personas/jpg?backgroundColor=b6e3f4,c0aede,d1d4f9&seed={{ $post->user->name }}" alt="" class="h-10 w-10 rounded-full bg-gray-100">
            <div class="text-sm leading-6">
                <p class="font-semibold text-gray-900">
                    <a href="/authors/{{ $post->user->username }}">
                        <span class="absolute inset-0"></span>
                        {{ $post->user->name }}
                    </a>
                </p>
            </div>
        </div>
    </div>
</article>
