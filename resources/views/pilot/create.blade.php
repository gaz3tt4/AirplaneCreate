<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Cadastro') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form id="form-pilot-create" action="{{route('pilot.store')}}" method="post">
                    @csrf
                        <div>
                            <div class="mt-4">
                                <x-input-label for="name" :value="__('Nome')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div >
                                <x-input-label for="CPF" :value="__('CPF')" />
                                <x-text-input id="CPF" class="block mt-1 w-full" type="text" name="CPF" :value="old('CPF')" required />
                                <x-input-error :messages="$errors->get('CPF')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="phone" :value="__('phone')" />
                                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />

                            </div>
                            <div>
                                <x-input-label for="RAB" :value="__('RAB')" />
                                <x-text-input id="RAB" class="block mt-1 w-full" type="text" name="RAB" :value="old('RAB')" required />
                                <x-input-error :messages="$errors->get('RAB')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="dt_brith" :value="__('Data de Nascimento')" />
                                <x-text-input id="dt_brith" class="block mt-1 w-full" type="date" name="dt_brith" :value="old('dt_brith')" required />
                                <x-input-error :messages="$errors->get('dt_brith')" class="mt-2" />
                            </div>
                            <div>
                                <x-primary-button type="submit">{{ __('Cadastrar') }}</x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
