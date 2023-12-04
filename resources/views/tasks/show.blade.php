<x-app-layout>
    <div class="py-24 space-y-4">
        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 py-6 sm:px-6">
                <h3 class="text-base font-semibold leading-7 text-gray-900">
                    Todo Information
                </h3>

                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">
                    Todo information and status.
                </p>
            </div>

            <div class="border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-900">
                            Description
                        </dt>

                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 break-words">
                            {{ $task->description }}
                        </dd>
                    </div>

                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-900">
                            Status
                        </dt>

                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0 break-words">
                            {{ $task->is_completed ? 'Completed' : 'Pending' }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>

        <div>
            <a href="{{ route('tasks.index') }}">
                <x-primary-button type="button">
                    Back
                </x-primary-button>
            </a>
        </div>
    </div>
</x-app-layout>
