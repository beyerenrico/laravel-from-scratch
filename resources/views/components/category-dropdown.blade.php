<x-dropdown label="Categories" id="categories">
    <x-slot:trigger>
        <button
            type="button"
            class="inline-flex w-full justify-between gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-normal text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
            aria-haspopup="true"
        >
            @if(isset($currentCategory))
                {{ ucwords($currentCategory->name) }}
            @else
                Select a category
            @endif
            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
        </button>
    </x-slot:trigger>

    <x-dropdown-item
        href="/?{{ http_build_query(request()->except('category', 'page')) }}"
        :active="!isset($currentCategory)"
    >All</x-dropdown-item>
    @foreach($categories as $category)
        <x-dropdown-item
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active="isset($currentCategory) && $currentCategory->is($category)"
        >{{ ucwords($category->name) }}</x-dropdown-item>
    @endforeach
</x-dropdown>
