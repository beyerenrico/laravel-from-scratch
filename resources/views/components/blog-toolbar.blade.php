@props(['categories', 'currentCategory'])

<div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-y-4 gap-x-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
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
            href="/"
            :active="request()->routeIs('home')"
        >All</x-dropdown-item>
        @foreach($categories as $category)
            <x-dropdown-item
                href="/categories/{{ $category->slug }}"
                :active="isset($currentCategory) && $currentCategory->is($category)"
            >{{ ucwords($category->name) }}</x-dropdown-item>
        @endforeach
    </x-dropdown>
    <div class="col-span-2">
        <label for="search" class="block text-sm font-medium leading-6 text-gray-900">Search</label>
        <div class="mt-2">
            <input type="search" name="search" id="search" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Find something">
        </div>
    </div>
</div>
