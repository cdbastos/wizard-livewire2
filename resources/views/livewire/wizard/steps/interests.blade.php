<div class="mx-14">
{{--    <form wire:submit.prevent="submit">--}}
{{--        <div class="flex w-full items-center justify-center bg-grey-lighter">--}}
{{--            <div class="grid grid-cols-4 gap-4">--}}
{{--                @foreach($interests as $interest)--}}
{{--                    <div class="{{ in_array($interest->id, $selectedInterests) ? 'bg-red-500 text-white' : 'bg-gray-100 text-gray-700' }} grid" wire:click="setInterest('{{ $interest->id }}')">--}}
{{--                        <div class="p-6 flex items-center space-x-6 rounded-lg shadow-md hover:scale-105 transition transform duration-500 cursor-pointer">--}}
{{--                            <div>--}}
{{--                                <h2 class="text-xl font-bold mb-2">{{ $interest->name }}</h2>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="w-full text-center">--}}
{{--            @error('selectedInterests')--}}
{{--                <div class="text-red-600 mt-2">--}}
{{--                    {{ $errors->first('selectedInterests') }}--}}
{{--                </div>--}}
{{--            @enderror--}}
{{--        </div>--}}

{{--        <livewire:wizard.buttons wire:key="interests-buttons" />--}}
{{--    </form>--}}

    <div class="">
        <h2 class="text-2xl font-bold text-indigo-600 mb-4">Caracterización del perfil</h2>

        <form wire:submit.prevent="submit">
            <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-2 gap-6">

                <div class="mb-4">
                    <label for="seleccionePerfil" class="block text-sm font-medium text-gray-700">Seleccione perfil</label>
                    <select id="seleccionePerfil"
                            wire:model="selectedTipoPerfil"
                            name="seleccionePerfil" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option>Seleccione</option>
                        <option value="juridica" selected>Persona Juridica</option>
                        <option value="natural">Persona Natural</option>
                        <option value="estudiante">Estudiante</option>
                        <!-- Agrega aquí las opciones -->
                    </select>
                </div>

            </div>

            @if($selectedTipoPerfil == 'juridica')
                @livewire('wizard.steps.form.juridica')
            @elseif($selectedTipoPerfil == 'natural')
                @livewire('wizard.steps.form.natural')
            @elseif ($selectedTipoPerfil == 'estudiante')
                @livewire('wizard.steps.form.estudiante')
            @endif

            <livewire:wizard.buttons wire:key="interests-buttons"/>
        </form>
    </div>

</div>
