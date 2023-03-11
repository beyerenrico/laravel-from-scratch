<x-layout>
    <x-blog-header
        :title="$title ?? null"
        :entity="$entity ?? null"
    />
    <x-blog-toolbar
        :categories="$categories"
        :currentCategory="$currentCategory ?? null"
    />
    <x-posts-grid
        :posts="$posts"
    />
</x-layout>
