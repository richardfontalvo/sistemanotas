<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('Editar estudiante')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
                 <from action="{{route('estudiantes.update', $estudiante)}}" method="post">
                     @method('PUT')
                     @include('estudiantes.formulario')
                 </from>
            </div>
        </div>   
    </div>
</x-app-layout>