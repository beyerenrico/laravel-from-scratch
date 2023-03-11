<x-layout>
    <x-blog-header
        :title="$title ?? null"
        :entity="$entity ?? null"
    />
    <x-blog-toolbar />
    <x-posts-grid
        :posts="$posts"
    />
</x-layout>
