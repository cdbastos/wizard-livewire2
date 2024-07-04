<div class="mx-14">
    <form wire:submit.prevent="submit">
        <div class="flex w-full items-center justify-center bg-grey-lighter">
            <div class="grid grid-cols-4 gap-4">
                @foreach($interests as $interest)
                    <div class="{{ in_array($interest->id, $selectedInterests) ? 'bg-red-500 text-white' : 'bg-gray-100 text-gray-700' }} grid" wire:click="setInterest('{{ $interest->id }}')">
                        <div class="p-6 flex items-center space-x-6 rounded-lg shadow-md hover:scale-105 transition transform duration-500 cursor-pointer">
                            <div>
                                <h2 class="text-xl font-bold mb-2">{{ $interest->name }}</h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="w-full text-center">
            @error('selectedInterests')
                <div class="text-red-600 mt-2">
                    {{ $errors->first('selectedInterests') }}
                </div>
            @enderror
        </div>

        <livewire:wizard.buttons wire:key="interests-buttons" />
    </form>
</div>
