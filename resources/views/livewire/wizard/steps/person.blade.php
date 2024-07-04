<div class="mx-14">
    <form wire:submit.prevent="submit">

        <div class="mt-2">

            <x-card title="Datos del Quejoso o Denunciante" class="">

                <div class="grid grid-cols-1 md:grid-cols-8 sm:grid-cols-6 grid-cols-1 gap-6">

                    <div class="md:col-span-2 sm:col-span-3 col-span-1">
                        <x-input label="Primer Nombre" placeholder="Primer Nombre"
                                 wire:model.defer="person.first_name" />
                    </div>

                    <div class="md:col-span-2 sm:col-span-3 col-span-1">
                        <x-input label="Segundo Nombre"  placeholder="Segundo Nombre"
                                 wire:model.defer="person.second_name" />
                    </div>

                    <div class="md:col-span-2 sm:col-span-3 col-span-1">
                        <x-input label="Primer Apellido" placeholder="Primer Apellido"
                                 wire:model.defer="person.first_surname" />
                    </div>

                    <div class="md:col-span-2 sm:col-span-3 col-span-1">
                        <x-input label="Segundo Apellido"  placeholder="Segundo Apellido"
                                 wire:model.defer="person.second_surname" />
                    </div>

                    <div class="md:col-span-2 sm:col-span-3 col-span-1">
                        <x-native-select
                            label="Tipo de identificación"
                            option-key-value="true"
                            placeholder="Seleccione una opción"
                            wire:model.defer="person.identification_type_id"
                            :options="$this->identificationTypes" />
                    </div>

                    <div class="md:col-span-2 sm:col-span-3 col-span-1">
                        <x-input label="Identificación"  placeholder="Identificación"
                                 wire:model.defer="person.identification" icon="user" />
                    </div>

                    <div class="md:col-span-2 sm:col-span-3 col-span-1">
                        <x-native-select
                            label="Régimen de afiliación"
                            option-key-value="true"
                            placeholder="Seleccione una opción"
                            wire:model.defer="person.affiliation_scheme_id"
                            :options="$affiliationSchemes"/>
                    </div>

                    <div class="md:col-span-2 sm:col-span-3 col-span-1">
                        <x-input label="Email" placeholder="example@mail.com"
                                 wire:model.defer="person.email" icon="inbox"  />
                    </div>

                    <div class="md:col-span-2 sm:col-span-3 col-span-1">
                        <x-inputs.phone label="Número telefónico" placeholder="300 000-0000"
                                        wire:model.defer="person.phone_1" icon="phone" />
                    </div>

                    <div class="md:col-span-2 sm:col-span-3 col-span-1">
                        <x-native-select
                            label="Sexo"
                            option-key-value="true"
                            placeholder="Seleccione una opción"
                            wire:model.defer="person.sex"
                            :options="$sexes"/>
                    </div>

                    <div class="md:col-span-2 sm:col-span-3 col-span-1">
{{--                        <x-datetime-picker label="Fecha de Nacimiento" required without-time="true"--}}
{{--                                           timezone="America/Bogota"--}}
{{--                                           placeholder="Fecha" wire:model.defer="person.birthdate" />--}}

                        <x-jet-label for="person.birthdate" value="Fecha de nacimiento"
                                     class="inline-block text-gray-600 text-sm" />
                        <x-jet-input type="date" wire:model.defer="person.birthdate" class="text-sm w-full "
                                     id="person.birthdate" name="person.birthdate"/>
                        <x-jet-input-error for="person.birthdate" class="mt-2" />
                    </div>

                    <div class="md:col-span-2 sm:col-span-3 col-span-1">
                        <x-native-select
                            label="Departamento residencia"
                            option-key-value="true"
                            placeholder="Seleccione una opción"
                            wire:model.debounce="selectedDepartment"
                            :options="$departments"/>
                    </div>

                    <div class="md:col-span-2 sm:col-span-3 col-span-1">
                        <x-native-select
                            label="Municipio de residencia"
                            option-key-value="true"
                            placeholder="Seleccione una opción"
                            wire:model.defer="person.town_id"
                            :options="$towns"/>
                    </div>

                    <div class="md:col-span-4 sm:col-span-3 col-span-1">
                        <x-input label="Dirección" placeholder="Dirección de residencia"
                                 wire:model.defer="person.address" />
                    </div>

{{--                    <div class="md:col-span-2 sm:col-span-3 col-span-1">--}}
{{--                        <x-toggle label="Accept the terms and conditions" wire:model.defer="person.terms" />--}}
{{--                    </div>--}}

                </div>

{{--                <x-slot name="footer">--}}
{{--                    <div class="flex items-center gap-x-3 justify-end">--}}
{{--                        <x-button wire:click="cancel" label="Cancel" flat />--}}
{{--                        <x-button wire:click="save" label="Save" spinner="save" primary />--}}
{{--                    </div>--}}
{{--                </x-slot>--}}
            </x-card>


        </div>



        {{--        <div class="w-full flex-1 mx-2">--}}
        {{--            <label class="inline-flex items-center mt-3">--}}
        {{--                <input type="checkbox" wire:model="profile.display_profile" class="form-checkbox h-5 w-5 text-red-600" {{ $profile->display_profile ? 'checked' : '' }} />--}}
        {{--                <span class="ml-2 text-gray-700">Soy el denunciante o Quejoso</span>--}}
        {{--            </label>--}}
        {{--        </div>--}}


        <livewire:wizard.buttons wire:key="profile-buttons" :hide-prev-button="true"/>
    </form>
</div>
