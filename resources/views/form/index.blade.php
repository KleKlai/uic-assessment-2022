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

                            <select name="type_of_application" required>
                                @foreach ($type_of_applications as $type_of_application)
                                    <option value="{{ $type_of_application }}">{{ $type_of_application }}</option>
                                @endforeach
                            </select>
                        </div>

                        <hr class="mt-4">
                        <h1 class="font-semibold text-xl text-gray-800 leading-tight mt-2">Personal Information</h1>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Present Address (No., Street, City/Municipality,Province)')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="present_address" :value="old('present_address')" autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Nationality')" />

                            <select name="nationality" required>
                                <option value="Filipino">Filipino</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Sex')" />

                            <input class="form-check-input" type="radio" name="gender[]" value="female">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Female
                                </label>

                            <input class="form-check-input" type="radio" name="gender[]" value="male">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Male
                                </label>
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Birth Date')" />

                            <x-input id="name" class="block mt-1 w-full" type="date" name="birth_date" :value="old('birth_date')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Birth Place')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="birth_place" :value="old('birth_place')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Height in cm')" />

                            <x-input id="name" class="block mt-1 w-full" type="number" name="height" :value="old('height')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Weight in kg')" />

                            <x-input id="name" class="block mt-1 w-full" type="number" name="weight" :value="old('weight')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Civil Status')" />

                            <select name="civil_status" required>
                                @foreach ($civiL_status as $civiL_status)
                                    <option value="{{ $civiL_status }}">{{ $civiL_status }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Fathers Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="fathers_name" :value="old('fathers_name')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Mothers Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="mothers_name" :value="old('mothers_name')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Spouse_Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="spouse_name" :value="old('spouse_name')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Civil Status')" />

                            <select name="lca" required>
                                @foreach ($lcas as $lca)
                                    <option value="{{ $lca }}">{{ $lca }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Highest Educational Attainment')" />

                            <select name="highest_educational_attainment" required>
                                @foreach ($eas as $ea)
                                    <option value="{{ $ea }}">{{ $ea }}</option>
                                @endforeach
                            </select>
                        </div>

                        <hr class="mt-4">

                        <h1 class="font-semibold text-xl text-gray-800 leading-tight mt-2">DRIVING SKILL ACQUIRED FROM (FOR DL APPLICANTS ONLY)</h1>

                        <div class="mt-4">
                            <x-label for="name" :value="__('DRIVING SCHOOL')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="dl_driving_school" :value="old('dl_driving_school')" autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('INSTRUCTOR')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="dl_driving_school_instructor" :value="old('dl_driving_school_instructor')" autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('PRIVATE LICENSED PERSON with DL NO.')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="dl_private_licensed_person" :value="old('dl_private_licensed_person')" autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('NAME')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="dl_private_licensed_person_name" :value="old('dl_private_licensed_person_name')" autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('TESDA')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="dl_tesda" :value="old('dl_tesda')" autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('INSTRUCTOR')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="dl_tesda_instructor" :value="old('dl_tesda_instructor')" autofocus />
                        </div>

                        <hr class="mt-4">
                        <h1 class="font-semibold text-xl text-gray-800 leading-tight mt-2">Medical Information</h1>
                        <div class="mt-4">
                            <x-label for="name" :value="__('Blood Type')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="blood_type" :value="old('blood_type')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Organ to Donate')" />

                            <select name="organ_to_donate" required>
                                @foreach ($organ_to_donates as $organ_to_donate)
                                    <option value="{{ $organ_to_donate }}">{{ $organ_to_donate }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Eyes Color')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="eye_color" :value="old('eye_color')" required autofocus />
                        </div>

                        <hr class="mt-4">

                        <h1 class="font-semibold text-xl text-gray-800 leading-tight mt-2">{{ "DRIVER'S LICENSE VEHICLE CATEGORY" }}</h1>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Vehicle Conditions')" />

                            <select name="vehicle_category" required>
                                @foreach ($vehicle_categories as $vehicle_category)
                                    <option value="{{ $vehicle_category }}">{{ $vehicle_category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="name" :value="__('Vehicle Conditions')" />

                            <select name="vehicle_conditions" required>
                                @foreach ($vehicle_conditions as $vehicle_condition)
                                    <option value="{{ $vehicle_condition }}">{{ $vehicle_condition }}</option>
                                @endforeach
                            </select>
                        </div>

                        <hr class="mt-4">

                        <h1 class="font-semibold text-xl text-gray-800 leading-tight mt-2">{{ "Acknowledgement" }}</h1>

                        <p>BY SUBMITING THIS FORM, I VOLUTARILY AUTHORIZE LTO TO ALLOW DISCLOSURE OF THE ABOVEPERSONAL INFORMATION TO ANY AUTHORIZED GOVERNMENT AGENCY</p>

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
