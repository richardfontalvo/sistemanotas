<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('Editar materia')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
                 <from action="{{route('materias.update', $materia)}}" method="post">
                     @method('PUT')
                     @include('materias.formulario')
                 </from>
            </div>
        </div>   
    </div>
</x-app-layout>