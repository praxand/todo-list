<form action="{{ route('tasks.store') }}" method="post">
    @csrf

    <x-input-label for="description" value="Todo list" />

    <div class="mt-2 flex rounded-md shadow-sm">
        <div class="relative flex flex-grow items-stretch focus-within:z-10">
            <x-text-input
                type="text"
                name="description"
                id="description"
                placeholder="Add a new task"
                value="{{ old('description') }}"
                autofocus
            />
        </div>

        <button
            type="submit"
            class="relative -ml-px inline-flex items-center gap-x-1.5 rounded-r-md px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-6 h-6"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 4.5v15m7.5-7.5h-15"
                />
            </svg>
        </button>
    </div>

    <x-input-error :messages="$errors->get('description')" class="mt-2" />
</form>
