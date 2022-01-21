<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Date Submitted: ') }} {{ $form->created_at->diffForHumans() }}
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

                            <select name="type_of_application">
                                <option value="{{ $form->type_of_application }}">{{ $form->type_of_application }}</option>
                            </select>
                        </div>

                        <hr class="mt-4">
                        <h1 class="font-semibold text-xl text-gray-800 leading-tight mt-2">Personal Information</h1>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Name (Family Name, First Name, Middle name)')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="present_address" value="{{ ucwords($form->last_name) }}, {{ ucwords($form->first_name) }}" autofocus readonly/>
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Present Address (No., Street, City/Municipality,Province)')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="present_address" :value="$form->present_address" autofocus readonly/>
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Nationality')" />

                            <select name="nationality">
                                <option value="{{ $form->nationality }}">{{ $form->nationality }}</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Sex')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="sex" :value="ucwords($form->sex)" readonly autofocus />

                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Birth Date')" />

                            <x-input id="name" class="block mt-1 w-full" type="date" name="birth_date" :value="$form->birth_date" readonly autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Birth Place')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="birth_place" :value="$form->birth_place" readonly autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Height in cm')" />

                            <x-input id="name" class="block mt-1 w-full" type="number" name="height" :value="$form->height" readonly autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Weight in kg')" />

                            <x-input id="name" class="block mt-1 w-full" type="number" name="weight" :value="$form->weight" readonly autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Civil Status')" />

                            <select name="civil_status" readonly>
                                    <option value="{{ $form->civil_status }}">{{ $form->civil_status }}</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Civil Status')" />

                            <select name="lca" readonly>
                                    <option value="{{ $form->lca }}">{{ $form->lca }}</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Highest Educational Attainment')" />

                            <select name="highest_educational_attainment" readonly>
                                <option value="{{ $form->highest_educational_attainment }}">{{ $form->highest_educational_attainment }}</option>
                            </select>
                        </div>

                        <hr class="mt-4">

                        <h1 class="font-semibold text-xl text-gray-800 leading-tight mt-2">DRIVING SKILL ACQUIRED FROM (FOR DL APPLICANTS ONLY)</h1>

                        <div class="mt-4">
                            <x-label for="name" :value="__('DRIVING SCHOOL')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="dl_driving_school" :value="$form->dl_driving_school" autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('INSTRUCTOR')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="dl_driving_school_instructor" :value="$form->dl_driving_school_instructor" autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('PRIVATE LICENSED PERSON with DL NO.')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="dl_private_licensed_person" :value="$form->dl_private_licensed_person" autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('NAME')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="dl_private_licensed_person_name" :value="$form->dl_private_licensed_person_name" autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('TESDA')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="dl_tesda" :value="$form->dl_tesda" autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('INSTRUCTOR')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="dl_tesda_instructor" :value="$form->dl_tesda_instructor" autofocus />
                        </div>

                        <hr class="mt-4">
                        <h1 class="font-semibold text-xl text-gray-800 leading-tight mt-2">Medical Information</h1>
                        <div class="mt-4">
                            <x-label for="name" :value="__('Blood Type')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="blood_type" :value="$form->blood_type" readonly autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Organ to Donate')" />

                            <select name="organ_to_donate" readonly>
                                <option value="{{ $form->organ_to_donate }}">{{ $form->organ_to_donate }}</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Eyes Color')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="eye_color" :value="$form->eye_color" readonly autofocus />
                        </div>

                        <hr class="mt-4">

                        <h1 class="font-semibold text-xl text-gray-800 leading-tight mt-2">{{ "DRIVER'S LICENSE VEHICLE CATEGORY" }}</h1>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Vehicle Conditions')" />

                            <select name="vehicle_category" readonly>
                                    <option value="{{ $form->vehicle_category }}">{{ $form->vehicle_category }}</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Vehicle Conditions')" />

                            <select name="vehicle_conditions" readonly>
                                    <option value="{{ $form->vehicle_conditions }}">{{ $form->vehicle_conditions }}</option>
                            </select>
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
