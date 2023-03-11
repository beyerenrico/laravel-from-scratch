<div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-y-4 gap-x-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
    <x-category-dropdown />
    <div class="col-span-2">
        <form>
            <label for="search" class="block text-sm font-medium leading-6 text-gray-900">Search</label>
            <div class="mt-2">
                <input
                    value="{{ request('search') }}"
                    type="search"
                    name="search"
                    id="search"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    placeholder="Find something">
            </div>
            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
        </form>
    </div>
</div>
