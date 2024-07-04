<div class="mx-14">
    <form wire:submit.prevent="submit">
        <div class="flex w-full items-center justify-center bg-grey-lighter">
            <div class="grid grid-cols-4 gap-4">
                @foreach($skills as $skill)
                    <div class="{{ in_array($skill->id, $selectedSkills) ? 'bg-red-500 text-white' : 'bg-gray-100 text-gray-700' }} grid" wire:click="setSkill('{{ $skill->id }}')">
                        <div class="p-6 flex items-center space-x-6 rounded-lg shadow-md hover:scale-105 transition transform duration-500 cursor-pointer">
                            <div>
                                <h2 class="text-xl font-bold mb-2">{{ $skill->name }}</h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="w-full text-center">
            @error('selectedSkills')
                <div class="text-red-600 mt-2">
                    {{ $errors->first('selectedSkills') }}
                </div>
            @enderror
        </div>

        <livewire:wizard.buttons wire:key="skills-buttons" />
    </form>
</div>
