@props(['title', 'entity'])

<div class="mx-auto max-w-2xl text-center">
    @if(isset($title) and isset($entity))
        <section class="mb-8">
            <a
                href="/"
                role="button"
                class="inline-flex items-center gap-x-1.5 rounded-md py-1.5 px-2.5 text-sm font-normal shadow-sm text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus-visible:outline"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="-ml-0.5 h-3 w-3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                See all posts
            </a>
        </section>
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
            {{ $title }}{{ ucwords($entity->name) }}
        </h1>
    @else
        <h1 class="text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">
            <a href="/">My <span class="font-bold text-indigo-600">Laravel</span> Blog</a>
        </h1>
    @endif
</div>
