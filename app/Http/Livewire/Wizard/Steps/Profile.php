<?php

namespace App\Http\Livewire\Wizard\Steps;

use App\Contracts\Step;
use App\Traits\Wizard;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class Profile extends Component implements Step
{
    use Wizard;

    public \App\Models\Profile $profile;

    public $dataInfo;

    public function mount(): void {
        $this->profile = auth()->user()->profile()->firstOrNew();
    }

    public function rules(): array {
        return [
            'profile.first_name' => 'required|string|min:2|max:100',
            'profile.last_name' => 'required|string|min:2|max:100',
            'profile.birthdate' => 'required|date_format:Y-m-d',
            'profile.display_profile' => 'nullable'
        ];
    }

    public function submit(): void {
        dd('hola mundo');
        $this->validate();
        $this->profile->user_id = auth()->id();
        $this->profile->save();
        $this->nextStep();
        $this->emitTo("wizard.notification", "show", [
            "title" => "Perfil guardado",
            "message" => "Tu perfil ha sido guardado correctamente",
        ]);
    }

    public function render(): Renderable {
        return view('livewire.wizard.steps.profile');
    }
}
