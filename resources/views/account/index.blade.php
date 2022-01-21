<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Account Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if(Session::has('success-account'))
                        <p class="text-sm text-green-600">{{ Session::get('success-account') }}</p>
                    @endif

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- User Name -->
                        <div>
                            <x-label for="name" :value="__('Username')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="username" :value="$user->username" required readonly />
                        </div>

                        <!-- First Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('First Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="first_name" :value="$user->first_name" required readonly />
                        </div>

                        <!-- Last Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Last Name')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="last_name" :value="$user->last_name" required readonly />
                        </div>

                        <!-- Contact Number -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Contact Number')" />

                            <x-input id="name" class="block mt-1 w-full" type="number" name="contact_number" :value="$user->contact_number" required readonly />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$user->email" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('user.edit', $user) }}">
                                {{ __('Edit') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mt-3 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if(Session::has('success-password'))
                        <p class="text-sm text-green-600">{{ Session::get('success-password') }}</p>
                    @endif

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('password', $user) }}">
                        @csrf

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Current Password')" />

                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="current_password"
                                            required autocomplete="current-password" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('New Password')" />

                            <x-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
