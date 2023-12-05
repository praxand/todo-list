<nav x-data="{ open: false }" class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
            <div class="flex">
                <div class="flex flex-shrink-0 items-center">
                    <p class="font-semibold text-xl">
                        {{ config('app.name', 'Laravel') }}
                    </p>
                </div>

                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <a
                        href="{{ route('tasks.index') }}"
                        class="inline-flex items-center border-b-2 border-indigo-500 px-1 pt-1 text-sm font-medium text-gray-900"
                    >
                        Tasks
                    </a>
                    {{--
                    <a
                        href="#"
                        class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700"
                        >Team</a
                    >
                    --}}
                </div>
            </div>

            <div class="hidden sm:ml-6 sm:flex sm:items-center">
                <x-dropdown>
                    <x-dropdown-link
                        href="#"
                        id="user-menu-item-0"
                        role="menuitem"
                        tabindex="-1"
                    >
                        Your Profile
                    </x-dropdown-link>

                    <x-dropdown-link
                        href="#"
                        id="user-menu-item-1"
                        role="menuitem"
                        tabindex="-1"
                    >
                        Settings
                    </x-dropdown-link>

                    <form
                        action="{{ route('logout') }}"
                        method="POST"
                        class="hover:bg-gray-100 hover:text-gray-900"
                    >
                        @csrf

                        <button
                            type="submit"
                            id="user-menu-item-2"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                            class="block px-4 py-2 text-sm text-gray-700"
                            role="menuitem"
                            tabindex="-1"
                        >
                            Sign out
                        </button>
                    </form>
                </x-dropdown>
            </div>

            <div class="-mr-2 flex items-center sm:hidden">
                <button
                    @click="open = ! open"
                    type="button"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                    aria-controls="mobile-menu"
                    aria-expanded="false"
                >
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>

                    <svg
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            :class="{'hidden': open, 'inline-flex': ! open }"
                            class="inline-flex"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                        />

                        <path
                            :class="{'hidden': ! open, 'inline-flex': open }"
                            class="hidden"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div
        :class="{'block': open, 'hidden': ! open}"
        class="hidden sm:hidden"
        id="mobile-menu"
    >
        <div class="space-y-1 pb-3 pt-2">
            <a
                href="{{ route('tasks.index') }}"
                class="block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700"
            >
                Tasks
            </a>
            {{--
            <a
                href="#"
                class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700"
                >Team</a
            >
            --}}
        </div>

        <div class="border-t border-gray-200 pb-3 pt-4">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <img
                        src="https://cdn.vectorstock.com/i/preview-1x/08/19/gray-photo-placeholder-icon-design-ui-vector-35850819.jpg"
                        alt="Profile picture"
                        class="h-10 w-10 rounded-full"
                    />
                </div>

                <div class="ml-3">
                    <div class="text-base font-medium text-gray-800">
                        {{ Auth::user()->name }}
                    </div>

                    <div class="text-sm font-medium text-gray-500">
                        {{ Auth::user()->email }}
                    </div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <a
                    href="#"
                    class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800"
                >
                    Your Profile
                </a>

                <a
                    href="#"
                    class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800"
                >
                    Settings
                </a>

                <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800">
                    @csrf

                    <button
                        type="submit"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                    >
                        Sign out
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
