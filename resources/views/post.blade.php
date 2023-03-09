<x-layout>
    <section>
        <a href="/posts" role="button" class="secondary">Back to Blog</a>
    </section>
    <hgroup>
        <h1>{{ $post->title }}</h1>
        <h2>
            <small>
                By <a class="secondary" href="/authors/{{ $post->user->id }}">{{ $post->user->name }}</a> in
                <a class="secondary" href="/categories/{{ $post->category->slug }}">{{ $post->category->name  }}</a> at
                {{ date('d.m.Y H:i', strtotime($post->updated_at)) }}
            </small>
        </h2>
    </hgroup>
    <p>{{ $post->excerpt }}</p>
    <p>{{ $post->body }}</p>
</x-layout>
