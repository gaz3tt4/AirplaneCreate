
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{('Editar')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="PUT" action="{{route('airplane.update', $airplane->id)}}" >
                        @csrf
                        <div class="form-create-airplane">
                            <div>
                                <label for="brendAirplane">Brend</label>
                                <input class="" type="String" name="brandAirplane" id="brandAirplane" value="{{old('brendAirplane', @$airplane->brand)}}">
                            </div>
                            <div>
                                <label for="modelAirplane">Model</label>
                                <input type="String" class="form" name="modelAirplane" id="modelAirplane" value="{{old('modelAirplane', @$airplane->model)}}">
                            </div>
                            <div>
                               <label for="yearAirplane">Year</label>
                                <input type="Number" class="form" name="yearAirplane" id="yearAirplane" value="{{old('yearAirplane', @$airplane->year)}}">
                            </div>
                            <div>
                                <label for="status">status</label>
                                <select class="form-control" name="status" id="status" value="{{old('status', @$airplane->status)}}" required>
                                    <option value="">Selecione...</option>
                                    @if (@$airplane->status == "1")
                                        <option value="0">Inative</option>
                                        <option selected='selected' value="1">Active</option>
                                    @elseif (@$airplane->status =="0")
                                        <option value="1">Active</option>
                                        <option selected='selected' value="0">Inavive</option>
                                    @endif
                                </select>
                            </div>
                                <x-primary-button type="submit" class="ms-3">SALVAR</x-primary-button>
                                <x-danger-button>
                                    <a style="by" href="{{route('airplane.destroy', $airplane->id)}}">DELETAR</a>
                                </x-danger-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
