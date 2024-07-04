<div class="mx-14">
    <form wire:submit.prevent="submit">
        <div class="flex flex-col md:flex-row">
            <div class="w-full flex-1 mx-2">
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                    <input
                        wire:model.defer="profile.first_name"
                        placeholder="Nombre"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800{{ $errors->has('profile.first_name') ? ' border-2 border-red-600' : '' }}"
                    />
                </div>
                @error('profile.first_name')
                    <div class="text-red-600 mt-2">
                        {{ $errors->first('profile.first_name') }}
                    </div>
                @enderror
            </div>

            <div class="w-full flex-1 mx-2">
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                    <input
                        wire:model.defer="profile.last_name"
                        placeholder="Apellidos"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800{{ $errors->has('profile.last_name') ? ' border-2 border-red-600' : '' }}"
                    />
                </div>
                @error('profile.last_name')
                    <div class="text-red-600 mt-2">
                        {{ $errors->first('profile.last_name') }}
                    </div>
                @enderror
            </div>
            <div class="w-full flex-1 mx-2">
                <div class="bg-white my-2 p-1 flex border border-gray-200 rounded">
                    <input
                        wire:model.defer="profile.birthdate"
                        placeholder="Fecha de nacimiento"
                        type="date"
                        class="p-1 px-2 appearance-none outline-none w-full text-gray-800{{ $errors->has('profile.birthdate') ? ' border-2 border-red-600' : '' }}"
                    />
                </div>
                @error('profile.birthdate')
                    <div class="text-red-600 mt-2">
                        {{ $errors->first('profile.birthdate') }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="w-full flex-1 mx-2">
            <label class="inline-flex items-center mt-3">
                <input type="checkbox" wire:model="profile.display_profile" class="form-checkbox h-5 w-5 text-red-600" {{ $profile->display_profile ? 'checked' : '' }} />
                <span class="ml-2 text-gray-700">Mostrar mi perfil publicamente</span>
            </label>
        </div>

        <livewire:wizard.buttons wire:key="profile-buttons" :hide-prev-button="true" />
    </form>
</div>
