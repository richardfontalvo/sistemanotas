<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{__('ver estudiante')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg">
                <div class="block">
                    <x-jet-label for="nombre" value="{{__('Nombre')}}" />
                    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $materia->nombre)" readonly />
                    <x-jet-label for="version" value="{{__('Version')}}" />
                    <x-jet-input id="version" class="block mt-1 w-full" type="text" name="version" :value="old('version', $materia->version)" readonly />

                </div>
            </div>
        </div>
    </div>
</x-app-layout>