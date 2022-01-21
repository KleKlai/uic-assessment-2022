<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Verification') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(Auth::user()->form->status == 'Pending')
                        Hi, {{ Auth::user()->first_name }} You're application form has been submitted and pending for approval.
                    @endif

                    @if(Auth::user()->form->status == 'Decline')
                        Hi, {{ Auth::user()->first_name }} Sorry, You're application form has been {{ Auth::user()->form->status }}
                    @endif

                    @if(Auth::user()->form->status == 'Approved')
                        Horrayyy!!!You're application form has been {{ Auth::user()->form->status }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
