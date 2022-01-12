<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Applicant Name: ') }} {{ $form->name }}
        </h2>
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Status: {{ $form->status }}</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <div>
                        <x-label for="name" :value="__('Type of Application')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="type_of_application" :value="$form->type_of_application" required readonly/>
                    </div>

                    <div class="mt-4">
                        <x-label for="name" :value="__('NAME (Family Name, First Name, Middle Name)')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$form->name" required readonly/>
                    </div>

                    <div class="mt-4">
                        <x-label for="name" :value="__('Present Address (No., Street, City/Municipality,Province)')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="present_address" :value="$form->present_address" required readonly />
                    </div>

                    <div class="mt-4">
                        <x-label for="name" :value="__('Nationality')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="nationality" :value="$form->nationality" required readonly />
                    </div>

                    <div class="mt-4">
                        <x-label for="name" :value="__('Sex')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="sex" :value="$form->sex" required readonly />
                    </div>

                    <div class="mt-4">
                        <x-label for="name" :value="__('Birth Date')" />

                        <x-input id="name" class="block mt-1 w-full" type="text" name="birth_date" :value="$form->birth_date" required readonly />
                    </div>

                    <div class="mt-4">
                        <x-label for="name" :value="__('Height')" />

                        <x-input id="name" class="block mt-1 w-full" type="number" name="height" :value="$form->height" required readonly />
                    </div>

                    <div class="mt-4">
                        <x-label for="name" :value="__('Weight')" />

                        <x-input id="name" class="block mt-1 w-full" type="number" name="weight" :value="$form->weight" required readonly />
                    </div>

                    @if($form->status == 'Pending')
                        <form method="GET" action="{{ route('form.approved', $form) }}">
                            @csrf

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('form.decline', $form) }}">
                                    {{ __('Decline') }}
                                </a>

                                <x-button class="ml-4">
                                    {{ __('Approved') }}
                                </x-button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
