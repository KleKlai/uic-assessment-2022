<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="font-semibold text-lg text-gray-800 leading-tight">List of Form Submitted</h1>
        </div>

        @forelse ($forms as $form)
            <a href="{{ route('form.show', $form) }}">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-3">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            {{ ucwords($form->user->last_name) }}, {{ ucwords($form->user->first_name) }}
                        </div>
                    </div>
                </div>
            </a>
        @empty
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {{ "No submission yet!" }}
            </div>
        @endforelse
    </div>

</x-app-layout>
