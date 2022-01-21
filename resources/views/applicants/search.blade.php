<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <h1 class="font-semibold text-lg text-gray-800 leading-tight mb-4">Search</h1>

                <form class="w-full max-w-lg" method="POST" action="{{ route('applicants-show') }}">
                    @csrf

                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                Applicant Name
                            </label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" name="applicant_name" placeholder="Albuquerque">
                        </div>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                Type of Application
                            </label>
                            <div class="relative">
                                <select name="type" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                    @foreach ($type_of_applications as $type)
                                        <option value="{{ $type }}">{{ $type }}</option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                </div>
                            </div>
                        </div>
                        <x-button class="ml-4">
                            {{ __('Search') }}
                        </x-button>
                    </div>
                </form>

                @if(isset($details))
                    <p class="mt-4"> The Search results for your query <b> {{ $query }} </b> are :</p>
                    <div class="card-box">
                        @foreach($details as $detail)
                            <a href="{{ route('form.show', $detail->id) }}">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                                    <div class="p-6 bg-white border-b border-gray-200">
                                        {{ ucwords($detail->last_name) }}, {{ ucwords($detail->first_name) }}
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @elseif(isset($message))
                    <p class="mt-4"> No result found!</p>
                @endif
            </div>
        </div>
    </div>

</x-app-layout>
