@props(['posts'])

@if(request('page') > 1 || request('search'))
    @if ($posts->count())
        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-y-20 gap-x-8 lg:mx-0 lg:max-w-none lg:grid-cols-6">
            @foreach($posts as $post)
                <x-post-card
                    :post="$post"
                    class="col-span-2"
                />
            @endforeach
        </div>
        <div class="mt-16">
            {{ $posts->onEachSide(0)->links() }}
        </div>
    @else
        <p class="text-center mt-16">No posts yet. Please check back later</p>
    @endif
@else
    @if ($posts->count())
        <div class="mx-auto mt-16 grid max-w-2xl lg:mx-0 lg:max-w-none">
            <x-post-featured-card :post="$posts->first()" />
        </div>
        @if($posts->count() > 1)
            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-y-20 gap-x-8 lg:mx-0 lg:max-w-none lg:grid-cols-6">
                @foreach($posts->skip(1) as $post)
                    <x-post-card
                        :post="$post"
                        class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
                    />
                @endforeach
            </div>
        @endif
        <div class="mt-16">
            {{ $posts->onEachSide(0)->links() }}
        </div>
    @else
        <p class="text-center mt-16">No posts yet. Please check back later</p>
    @endif
@endif
