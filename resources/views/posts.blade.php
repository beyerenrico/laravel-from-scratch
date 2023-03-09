<x-layout>
    @if(isset($title) and isset($entity))
        <section>
            <a href="/posts" role="button" class="secondary">Back to Blog</a>
        </section>
        <h1>
            {{ $title }}{{ $entity->name }}
        </h1>
    @else
        <h1>
            <a href="/posts">Blog</a>
        </h1>
    @endif
    @if(isset($count))
        Found {{ $count }} Post{{ $count > 1 ? 's' : '' }}
    @endif
    @forelse($posts as $post)
        <article>
            <hgroup>
                <h2>
                    <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                </h2>
                <h3>
                    <small>
                        By <a class="secondary" href="/authors/{{ $post->user->id }}">{{ $post->user->name }}</a> in
                        <a class="secondary" href="/categories/{{ $post->category->slug }}">{{ $post->category->name  }}</a> at
                        {{ date('d.m.Y H:i', strtotime($post->updated_at)) }}
                    </small>
                </h3>
            </hgroup>
            <p>{{ $post->excerpt }}</p>
        </article>
    @empty
        <p>No posts found</p>
    @endforelse
</x-layout>
