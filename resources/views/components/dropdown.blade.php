<div
                    x-data="{ openMenu: false }"
                    @click.outside="openMenu = false"
                    @close.stop="openMenu = false"
                    class="relative ml-3"
                >
                    <div @click="openMenu = ! openMenu">
                        <button
                            type="button"
                            id="user-menu-button"
                            class="relative flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            aria-expanded="false"
                            aria-haspopup="true"
                        >
                            <span class="absolute -inset-1.5"></span>

                            <span class="sr-only">Open user menu</span>

                            <img
                                class="h-8 w-8 rounded-full"
                                src="https://cdn.vectorstock.com/i/preview-1x/08/19/gray-photo-placeholder-icon-design-ui-vector-35850819.jpg"
                                alt="Profile picture"
                            />
                        </button>
                    </div>

                    <div
                        x-show="openMenu"
                        @click="openMenu = false"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="transform opacity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu"
                        aria-orientation="vertical"
                        aria-labelledby="user-menu-button"
                        tabindex="-1"
                    >
                        {{ $slot }}
                    </div>
                </div>