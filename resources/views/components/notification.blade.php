<div
    aria-live="assertive"
    class="pointer-events-none fixed z-20 inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6"
>
    <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
        @if(session()->has('success'))
            <x-success-message />
        @endif
    </div>
</div>
