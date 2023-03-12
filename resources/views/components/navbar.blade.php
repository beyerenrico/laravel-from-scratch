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
                    @guest
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
                    @endguest
                    @auth
                        <span>Welcome, {{ auth()->user()->name }}!</span>
                        <div x-data="{show: false}" @click.outside="show = false" class="relative inline-block text-left">
                            <div>
                                <button @click="show = !show" type="button" class="flex items-center rounded-full bg-gray-100 text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-100" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                    <span class="sr-only">Open options</span>
                                    <img src="https://api.dicebear.com/5.x/personas/jpg?backgroundColor=b6e3f4,c0aede,d1d4f9&seed={{ auth()->user()->username }}" alt="" class="h-10 w-10 rounded-full bg-gray-100">
                                </button>
                            </div>

                            <div x-show="show" x-transition class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" style="display: none;">
                                <div class="py-1" role="none">
{{--                                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a>--}}
                                    <form method="POST" action="/logout" role="none">
                                        @csrf
                                        <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>
