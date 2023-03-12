@props(['id', 'label', 'trigger'])

<div class="w-full">
    <label
        for="{{ $id }}"
        class="block text-sm font-medium leading-6 text-gray-900"
    >{{ $label }}</label>
    <div
        x-data="{ isOpen: false }"
        @click.outside="isOpen = false"
        class="relative inline-block text-left w-full mt-2"
        id="{{ $id }}"
    >
        <div @click="isOpen = !isOpen">
            {{ $trigger }}
        </div>
        <div
            x-show="isOpen"
            x-transition
            class="absolute left-0 right-0 z-10 mt-2 w-full origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none h-56 overflow-y-scroll"
            role="menu"
            aria-orientation="vertical"
            aria-labelledby="{{ $id }}"
            tabindex="-1"
            style="display: none;"
        >
            <div class="py-1" role="none">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
