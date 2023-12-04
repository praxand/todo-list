<x-app-layout>
    <div class="py-24 space-y-4">
        @include('tasks.partials.input')

        <form action="{{ route('tasks.clear') }}" method="post">
            @csrf
            @method('DELETE')

            <x-primary-button type="submit" class="w-full">
                Clear completed
            </x-primary-button>
        </form>

        @include('tasks.partials.list')

        {{ $tasks->links() }}
    </div>
</x-app-layout>
