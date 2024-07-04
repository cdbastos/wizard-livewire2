<div class="mx-14">
    <form wire:submit.prevent="submit">
        <div class="flex w-full items-center justify-center mb-2">
            <img class="w-48 h-48" src="{{ is_string($profileAvatar) ? $profileAvatar : $profileAvatar->temporaryUrl() }}" />
        </div>

        <div class="flex w-full items-center justify-center bg-grey-lighter">
            <label class="w-64 flex flex-col items-center px-4 py-6 bg-red-500 text-white rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-indigo-400 hover:text-white">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                </svg>
                <span class="mt-2 text-base leading-normal">{{ __("Selecciona un avatar") }}</span>
                <input name="profileAvatar" accept="image/png,image/jpeg,image/jpg" class="hidden" type="file" wire:model="profileAvatar" />
            </label>
        </div>

        <div class="grid w-full">
            @error('profileAvatar') <span class="text-red-600 text-center">{{ $message }}</span> @enderror
        </div>

        <livewire:wizard.buttons key="avatar-buttons" />
    </form>
</div>
