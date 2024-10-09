
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
                                <label for="brendAirplane">Brend</label>
                                <x-text-input  type="String" name="brandAirplane" id="brandAirplane">
                            </div>
                            <div>
                                <label for="modelAirplane">Model</label>
                                <x-text-input type="String" class="form" name="modelAirplane" id="modelAirplane">
                            </div>
                            <div>
                               <label for="yearAirplane">Year</label>
                                <input type="Number" class="form" name="yearAirplane" id="yearAirplane">
                            </div>
                            <div>
                                <label for="status">status</label>
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
