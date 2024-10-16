<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pilotos') }}
        </h2>
        <div style="text-align: right">
            <a href="/pilot/create" class="btn btn-primary">Create</a>
        </div>
    </x-slot>

    @foreach ($pilots as $pilot)
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div>
                            <p>Nome:{{$pilot->name}}</p>
                            <p>CPF:{{$pilot->cpf}}</p>
                            <datalist>Data de Nascimento:{{$pilot->dt_brith}}</datalist>
                            <p>RAB:{{$pilot->RAB}}</p>
                            <p>Telefone:{{$pilot->phone}}</p>
                            <div>
                                <x-primary-button>
                                    <a href="{{route('pilot.edit', $pilot->id)}}">EDITAR</a>
                                </x-primary-button>
                            </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</x-app-layout>
