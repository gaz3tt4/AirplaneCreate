<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Editar') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form id="form-pilot-edit" action="{{route('pilot.update', $pilot->id)}}" method="put">
                    @csrf
                        <div>
                            <div class="mt-4">
                                <x-input-label for="name" :value="__('Nome')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $pilot->name)" required/>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div >
                                <x-input-label for="CPF" :value="__('CPF')" />
                                <x-text-input id="CPF" class="block mt-1 w-full" type="text" name="CPF" :value="old('CPF', $pilot->cpf)" required />
                                <x-input-error :messages="$errors->get('CPF')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="Phone" :value="__('Phone')" />
                                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone', $pilot->phone)" required />

                            </div>
                            <div>
                                <x-input-label for="RAB" :value="__('RAB')" />
                                <x-text-input id="RAB" class="block mt-1 w-full" type="text" name="RAB" :value="old('RAB', $pilot->RAB)" required />
                                <x-input-error :messages="$errors->get('RAB')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="date_brith" :value="__('Data de Nascimento')" />
                                <x-text-input id="date_brith" class="block mt-1 w-full" type="date" name="date_brith" :value="old('date_brith', $pilot->date_brith)" required />
                                <x-input-error :messages="$errors->get('date_brith')" class="mt-2" />
                            </div>
                            <div class="flex items-center mt-4">
                                <x-primary-button type="submit">{{ __('EDITAR') }}</x-primary-button>
                                <x-danger-button>
                                    <a style="by" href="{{route('pilot.destroy', $pilot->id)}}">DELETAR</a>
                                </x-danger-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
