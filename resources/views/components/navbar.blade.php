<nav class="bg-white shadow relative z-10">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 justify-between">
            <div class="flex flex-1 items-stretch justify-start">
                <div class="flex flex-shrink-0 items-center">
                    <img class="block h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                </div>
                <div class="flex ml-6 space-x-8">
                    <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                    <!--<a href="#" class="inline-flex items-center border-b-2 border-indigo-500 px-1 pt-1 text-sm font-medium text-gray-900">Homepage</a>-->
                    <a
                        href="/"
                        class="inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium {{ request()->routeIs('home') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }}"
                    >Blog</a>
                </div>
                <div class="flex space-x-2 items-center ml-auto">
                    <a
                        href="/login"
                        role="button"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    >
                        Login
                    </a>
                    <a
                        href="/register"
                        role="button"
                        class="inline-flex items-center gap-x-1.5 rounded-md py-1.5 px-2.5 text-sm font-normal shadow-sm text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus-visible:outline"
                    >
                        Register
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
