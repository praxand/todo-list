<x-guest-layout>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                Register your account
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form
                action="{{ route('register') }}"
                method="post"
                class="space-y-6"
            >
                @csrf

                <div>
                    <x-auth.input-label for="name" value="Name" />

                    <div class="mt-2">
                        <x-auth.text-input
                            type="text"
                            name="name"
                            id="name"
                            autocomplete="name"
                            required
                            value="{{ old('name') }}"
                        />
                    </div>

                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div>
                    <x-auth.input-label for="email" value="Email address" />

                    <div class="mt-2">
                        <x-auth.text-input
                            type="email"
                            name="email"
                            id="email"
                            autocomplete="username"
                            required
                            value="{{ old('email') }}"
                        />
                    </div>

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <x-auth.input-label for="password" value="Password" />
                    </div>

                    <div class="mt-2">
                        <x-auth.text-input
                            type="password"
                            name="password"
                            id="password"
                            autocomplete="current-password"
                            required
                        />
                    </div>

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <x-auth.input-label for="password_confirmation" value="Confirm Password" />
                    </div>

                    <div class="mt-2">
                        <x-auth.text-input
                            type="password"
                            name="password_confirmation"
                            id="password_confirmation"
                            autocomplete="new-password"
                            required
                        />
                    </div>

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div>
                    <x-auth.primary-button type="submit">
                        Register
                    </x-auth.primary-button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Already a member?

                <a
                    href="{{ route('login') }}"
                    class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500"
                >
                    Login
                </a>
            </p>
        </div>
    </div>
</x-guest-layout>
