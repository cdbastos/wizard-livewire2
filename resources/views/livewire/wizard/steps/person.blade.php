<div class="mx-14">
    {{--    <form wire:submit.prevent="submit">--}}

    {{--        <div class="mt-2">--}}

    {{--            <x-card title="Datos del Quejoso o Denunciante" class="">--}}

    {{--                <div class="grid grid-cols-1 md:grid-cols-8 sm:grid-cols-6 grid-cols-1 gap-6">--}}

    {{--                    <div class="md:col-span-2 sm:col-span-3 col-span-1">--}}
    {{--                        <x-input label="Primer Nombre" placeholder="Primer Nombre"--}}
    {{--                                 wire:model.defer="person.first_name" />--}}
    {{--                    </div>--}}

    {{--                    <div class="md:col-span-2 sm:col-span-3 col-span-1">--}}
    {{--                        <x-input label="Segundo Nombre"  placeholder="Segundo Nombre"--}}
    {{--                                 wire:model.defer="person.second_name" />--}}
    {{--                    </div>--}}

    {{--                    <div class="md:col-span-2 sm:col-span-3 col-span-1">--}}
    {{--                        <x-input label="Primer Apellido" placeholder="Primer Apellido"--}}
    {{--                                 wire:model.defer="person.first_surname" />--}}
    {{--                    </div>--}}

    {{--                    <div class="md:col-span-2 sm:col-span-3 col-span-1">--}}
    {{--                        <x-input label="Segundo Apellido"  placeholder="Segundo Apellido"--}}
    {{--                                 wire:model.defer="person.second_surname" />--}}
    {{--                    </div>--}}

    {{--                    <div class="md:col-span-2 sm:col-span-3 col-span-1">--}}
    {{--                        <x-native-select--}}
    {{--                            label="Tipo de identificación"--}}
    {{--                            option-key-value="true"--}}
    {{--                            placeholder="Seleccione una opción"--}}
    {{--                            wire:model.defer="person.identification_type_id"--}}
    {{--                            :options="$this->identificationTypes" />--}}
    {{--                    </div>--}}

    {{--                    <div class="md:col-span-2 sm:col-span-3 col-span-1">--}}
    {{--                        <x-input label="Identificación"  placeholder="Identificación"--}}
    {{--                                 wire:model.defer="person.identification" icon="user" />--}}
    {{--                    </div>--}}

    {{--                    <div class="md:col-span-2 sm:col-span-3 col-span-1">--}}
    {{--                        <x-native-select--}}
    {{--                            label="Régimen de afiliación"--}}
    {{--                            option-key-value="true"--}}
    {{--                            placeholder="Seleccione una opción"--}}
    {{--                            wire:model.defer="person.affiliation_scheme_id"--}}
    {{--                            :options="$affiliationSchemes"/>--}}
    {{--                    </div>--}}

    {{--                    <div class="md:col-span-2 sm:col-span-3 col-span-1">--}}
    {{--                        <x-input label="Email" placeholder="example@mail.com"--}}
    {{--                                 wire:model.defer="person.email" icon="inbox"  />--}}
    {{--                    </div>--}}

    {{--                    <div class="md:col-span-2 sm:col-span-3 col-span-1">--}}
    {{--                        <x-inputs.phone label="Número telefónico" placeholder="300 000-0000"--}}
    {{--                                        wire:model.defer="person.phone_1" icon="phone" />--}}
    {{--                    </div>--}}

    {{--                    <div class="md:col-span-2 sm:col-span-3 col-span-1">--}}
    {{--                        <x-native-select--}}
    {{--                            label="Sexo"--}}
    {{--                            option-key-value="true"--}}
    {{--                            placeholder="Seleccione una opción"--}}
    {{--                            wire:model.defer="person.sex"--}}
    {{--                            :options="$sexes"/>--}}
    {{--                    </div>--}}

    {{--                    <div class="md:col-span-2 sm:col-span-3 col-span-1">--}}
    {{--                        <x-datetime-picker label="Fecha de Nacimiento" required without-time="true"--}}
    {{--                                           timezone="America/Bogota"--}}
    {{--                                           placeholder="Fecha" wire:model.defer="person.birthdate" />--}}

    {{--                        <x-jet-label for="person.birthdate" value="Fecha de nacimiento"--}}
    {{--                                     class="inline-block text-gray-600 text-sm" />--}}
    {{--                        <x-jet-input type="date" wire:model.defer="person.birthdate" class="text-sm w-full "--}}
    {{--                                     id="person.birthdate" name="person.birthdate"/>--}}
    {{--                        <x-jet-input-error for="person.birthdate" class="mt-2" />--}}
    {{--                    </div>--}}

    {{--                    <div class="md:col-span-2 sm:col-span-3 col-span-1">--}}
    {{--                        <x-native-select--}}
    {{--                            label="Departamento residencia"--}}
    {{--                            option-key-value="true"--}}
    {{--                            placeholder="Seleccione una opción"--}}
    {{--                            wire:model.debounce="selectedDepartment"--}}
    {{--                            :options="$departments"/>--}}
    {{--                    </div>--}}

    {{--                    <div class="md:col-span-2 sm:col-span-3 col-span-1">--}}
    {{--                        <x-native-select--}}
    {{--                            label="Municipio de residencia"--}}
    {{--                            option-key-value="true"--}}
    {{--                            placeholder="Seleccione una opción"--}}
    {{--                            wire:model.defer="person.town_id"--}}
    {{--                            :options="$towns"/>--}}
    {{--                    </div>--}}

    {{--                    <div class="md:col-span-4 sm:col-span-3 col-span-1">--}}
    {{--                        <x-input label="Dirección" placeholder="Dirección de residencia"--}}
    {{--                                 wire:model.defer="person.address" />--}}
    {{--                    </div>--}}

    {{--                    <div class="md:col-span-2 sm:col-span-3 col-span-1">--}}
    {{--                        <x-toggle label="Accept the terms and conditions" wire:model.defer="person.terms" />--}}
    {{--                    </div>--}}

    {{--                </div>--}}

    {{--                <x-slot name="footer">--}}
    {{--                    <div class="flex items-center gap-x-3 justify-end">--}}
    {{--                        <x-button wire:click="cancel" label="Cancel" flat />--}}
    {{--                        <x-button wire:click="save" label="Save" spinner="save" primary />--}}
    {{--                    </div>--}}
    {{--                </x-slot>--}}
    {{--            </x-card>--}}


    {{--        </div>--}}



    {{--        <div class="w-full flex-1 mx-2">--}}
    {{--            <label class="inline-flex items-center mt-3">--}}
    {{--                <input type="checkbox" wire:model="profile.display_profile" class="form-checkbox h-5 w-5 text-red-600" {{ $profile->display_profile ? 'checked' : '' }} />--}}
    {{--                <span class="ml-2 text-gray-700">Soy el denunciante o Quejoso</span>--}}
    {{--            </label>--}}
    {{--        </div>--}}


    <div class="">
        <h2 class="text-2xl font-bold mb-4">Datos personales</h2>
        <form wire:submit.prevent="submit">
            <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-2 gap-6">

                <div>
                    <label for="primerNombre" class="block text-sm font-medium text-gray-700">Primer Nombre *</label>
                    <input type="text" id="primerNombre" name="primerNombre" wire:model.defer="person.first_name"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                           placeholder="Escribe">
                </div>
                <div>
                    <div>
                        <label for="segundoNombre" class="block text-sm font-medium text-gray-700">Segundo Nombre
                            *</label>
                        <input type="text" id="segundoNombre" name="segundoNombre"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                               placeholder="Escribe">
                    </div>
                </div>

                <div>
                    <label for="primerApellido" class="block text-sm font-medium text-gray-700">Primer Apellido
                        *</label>
                    <input type="text" id="primerApellido" name="primerApellido"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                           placeholder="Escribe">
                </div>
                <div>
                    <label for="segundoApellido" class="block text-sm font-medium text-gray-700">Segundo Apellido
                        *</label>
                    <input type="text" id="segundoApellido" name="segundoApellido"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                           placeholder="Escribe">
                </div>

                <div>
                    <label for="tipoDocumento" class="block text-sm font-medium text-gray-700">Tipo de
                        documento</label>
                    <select id="tipoDocumento" name="tipoDocumento"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option>Seleccione</option>
                        <!-- Agrega aquí las opciones -->
                    </select>
                </div>
                <div>
                    <label for="numeroDocumento" class="block text-sm font-medium text-gray-700">Número de
                        documento</label>
                    <input type="text" id="numeroDocumento" name="numeroDocumento"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                           placeholder="Escribe">
                </div>

                <div>
                    <label for="numeroCelular" class="block text-sm font-medium text-gray-700">Número de
                        celular</label>
                    <input type="text" id="numeroCelular" name="numeroCelular"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                           placeholder="Escribe">
                </div>
                <div>
                    <label for="correoElectronico" class="block text-sm font-medium text-gray-700">Correo
                        electrónico</label>
                    <input type="email" id="correoElectronico" name="correoElectronico"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                           placeholder="Escribe">
                </div>

                <div>
                    <label for="genero" class="block text-sm font-medium text-gray-700">Género</label>
                    <select id="genero" name="genero"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option>Seleccione</option>
                        <!-- Agrega aquí las opciones -->
                    </select>
                </div>

                <br>

                <div class="">
                    <label class="block text-sm font-medium text-gray-700 mb-4">¿Pertenece a alguna minoría?</label>
                    <div class="flex items-center">

                        <div class="flex items-center ml-4">
                            <input id="minoriaSi" name="minoria" type="radio" value="si"
                                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                            <label for="minoriaSi" class="ml-2 block text-sm text-gray-700">Sí</label>
                        </div>
                        <div class="flex items-center ml-4">
                            <input id="minoriaNo" name="minoria" type="radio" value="no"
                                   class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                            <label for="minoriaNo" class="ml-2 block text-sm text-gray-700">No</label>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="minoriaCual" class="block text-sm font-medium text-gray-700">¿Cuál?</label>
                    <input type="text" id="minoriaCual" name="minoriaCual"
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                           placeholder="Escribe">
                </div>

            </div>

            <livewire:wizard.buttons wire:key="profile-buttons" :hide-prev-button="true"/>

        </form>
    </div>


    {{--    </form>--}}
</div>
