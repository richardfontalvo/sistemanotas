<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-light">
            {{ __('Crear Materias')}}
        </h2>
    </x-slot>
    <div class="py-12">

        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('materias.store') }}" method="post">
                @include('materias.formulario')
                </form>
            </div>
        </div>
    </div>
</x-app-layout>