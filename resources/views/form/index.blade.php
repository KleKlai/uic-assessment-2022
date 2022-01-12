<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Online Application Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('form.submit') }}">
                        @csrf

                        <div>
                            <x-label for="name" :value="__('Type of Application')" />

                            <select name="type_of_application">
                                @foreach ($type_of_applications as $type_of_application)
                                    <option value="{{ $type_of_application }}">{{ $type_of_application }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('NAME (Family Name, First Name, Middle Name)')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus/>
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Present Address (No., Street, City/Municipality,Province)')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="present_address" :value="old('present_address')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Nationality')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="nationality" :value="old('nationality')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Sex')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="sex" :value="old('sex')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Birth Date')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="birth_date" :value="old('birth_date')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Height')" />

                            <x-input id="name" class="block mt-1 w-full" type="number" name="height" :value="old('height')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Weight')" />

                            <x-input id="name" class="block mt-1 w-full" type="number" name="weight" :value="old('weight')" required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Submit') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
