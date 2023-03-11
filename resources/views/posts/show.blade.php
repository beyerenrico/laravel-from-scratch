<x-layout>
    <div class="mx-auto max-w-3xl text-base leading-7 text-gray-700">
        <a
            href="/"
            role="button"
            class="mb-8 inline-flex items-center gap-x-1.5 rounded-md py-1.5 px-2.5 text-sm font-semibold shadow-sm text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus-visible:outline"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="-ml-0.5 h-3 w-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
            See all posts
        </a>
        <p class="text-base font-semibold leading-7 text-indigo-600">
            <a class="secondary" href="/?category={{ $post->category->slug }}">{{ ucwords($post->category->name)  }}</a>
        </p>
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $post->title }}</h1>
        <figure class="my-8">
            <img class="aspect-video rounded-xl bg-gray-50 object-cover" src="https://picsum.photos/seed/{{ $post->slug }}/1200/500" alt="">
        </figure>
        <div class="max-w-xl h-full flex gap-6 mb-8">
            <div class="relative flex items-center gap-x-4">
                <img src="https://api.dicebear.com/5.x/personas/jpg?backgroundColor=b6e3f4,c0aede,d1d4f9&seed={{ $post->author->name }}" alt="" class="h-10 w-10 rounded-full bg-gray-100">
                <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900">
                        <a href="/?author={{ $post->author->username }}">
                            <span class="absolute inset-0"></span>
                            {{ $post->author->name }}
                        </a>
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-x-4 text-xs">
                <time datetime="{{ date('Y-m-d', strtotime($post->created_at)) }}" class="text-gray-500">Published {{ $post->created_at->diffForHumans() }}</time>
            </div>
        </div>
        <div class="text-xl leading-8">{!! $post->excerpt !!}</div>
        <div class="mt-10">
            {!! $post->body !!}
        </div>
    </div>
</x-layout>
