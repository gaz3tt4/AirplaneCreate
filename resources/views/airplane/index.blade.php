<x-app-layout>
    <x-slot name="header">
        <p>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Aviões') }}
        </h2>
        <div style="text-align: right">
            <a href="/airplane/create" class="btn btn-primary">Create</a>
        </div>
        </p>
    </x-slot>

    @foreach ($airplanes As $airplane)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-1 block w-full">
                    <div class="p-6 text-gray-900">
                        <p>Brend: {{$airplane->brand}}</p>
                        <p>Model: {{$airplane->model}}</p>
                        <p>Year: {{$airplane->year}}</p>
                        @if ($airplane->status==1)
                            <p>Status: Ativo</p>
                        @elseif ($airplane->status==0)
                            <p>Status: Inativo</p>
                        @endif
                        <x-primary-button>
                            <a href="{{route('airplane.edit', $airplane->id)}}">EDITAR</a>
                        </x-primary-button>
                        <x-danger-button>
                        <a href="{{route('airplane.inactive', $airplane->id)}}">INATIVAR</a>
                        </x-danger-button>

                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>

