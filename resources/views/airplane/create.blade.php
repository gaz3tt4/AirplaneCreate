
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
                    <form id="form-create-airplane" method="POST" action="{{route('airplane.store')}}" >
                        @csrf
                        <div>
                            <div class="block mt-4">
                                <x-input-label for="brandAirplane" :value="__('Brand')" />
                                <x-text-input id="brandAirplane" class="block mt-1 w-full" type="text" name="brandAirplane" :value="old('brandAirplane')" required/>
                                <x-input-error :messages="$errors->get('brandAirplane')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="modelAirplane" :value="__('Model')" />
                                <x-text-input id="modelAirplane" class="block mt-1 w-full" type="text" name="modelAirplane" :value="old('modelAirplane')" required/>
                                <x-input-error :messages="$errors->get('modelAirplane')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="yearAirplane" :value="__('Year')" />
                                <x-text-input id="yearAirplane" class="block mt-1 w-full" type="number" name="yearAirplane" :value="old('yearAirplane')" required/>
                                <x-input-error :messages="$errors->get('yearAirplane')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="status" :value="__('Status')" />
                                <select class="form-control" name="status" id="status" value="{{old('status', @$airplane->status)}}" required>
                                    <option value="">Selecione...</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inative</option>
                                    @if (@$airplane->status == "1")
                                        <option value="0">Inative</option>
                                        <option selected='selected' value="1">Active</option>
                                    @elseif (@$airplane->status =="0")
                                        <option value="1">Active</option>
                                        <option selected='selected' value="0">Inavive</option>
                                    @endif
                                </select>
                            </div>
                                <x-primary-button type="submit" class="btn btn-sucess">Criar</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
