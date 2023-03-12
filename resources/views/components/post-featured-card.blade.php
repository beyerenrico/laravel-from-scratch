@props(['post'])

<article class="grid grid-cols-1 lg:grid-cols-2 items-stretch gap-8 p-4 -m-4 transition hover:bg-gray-100 rounded-2xl">
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
                <a href="/?category={{ $post->category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}" class="relative z-10 rounded-full bg-gray-50 py-1.5 px-3 font-medium text-gray-600 hover:bg-gray-100">{{ ucwords($post->category->name)  }}</a>
            </div>
            <div class="group relative mb-auto">
                <h2 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                    <a href="/posts/{{ $post->slug }}">
                        <span class="absolute inset-0"></span>
                        {{ $post->title }}
                    </a>
                </h2>
                <div class="mt-5 text-sm leading-6 text-gray-600 line-clamp-6">{!! $post->excerpt !!}</div>
            </div>
        </div>
        <div class="relative my-4 lg:my-8 flex items-center gap-x-4">
            <img src="https://api.dicebear.com/5.x/personas/jpg?backgroundColor=b6e3f4,c0aede,d1d4f9&seed={{ $post->author->name }}" alt="" class="h-10 w-10 rounded-full bg-gray-100">
            <div class="text-sm leading-6">
                <p class="font-semibold text-gray-900">
                    <a href="?author={{ $post->author->username }}">
                        <span class="absolute inset-0"></span>
                        {{ $post->author->name }}
                    </a>
                </p>
            </div>
        </div>
    </div>
</article>
