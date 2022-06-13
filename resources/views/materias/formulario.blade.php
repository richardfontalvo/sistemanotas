@csrf
<div class="block">
    <x-jet-label for="nombre" value="{{ __('Nombre de Materia')}}" />
    <x-jet-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $materia->nombre)" required autofocus />
    <x-jet-label for="version" value="{{ __('Version')}}" />
    <x-jet-input id="version" class="block mt-1 w-full" type="text" name="version" :value="old('version', $materia->version)" required autofocus />

    <div class="flex justify-end">
        <div class="p-2">
            <div class="flex justify-end">
                <a href="{{ route('materias.create')}}">
                    <x-jet-button type="submit">
                        Guardar
                    </x-jet-button>
            </div>
        </div>
    </div>
</div