<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

        <div class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div>
                            <div>
                                <image src="{{asset('img/logo.png')}}" alt="logo" width="10" height="10"></image>
                                <a href="{{route('airplane.index')}}">Aviões</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div>
                            <div>
                                <a href="{{route('pilot.index')}}">Pilotos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
