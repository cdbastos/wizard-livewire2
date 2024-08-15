<?php

namespace App\Http\Livewire\Wizard\Steps;

use App\Contracts\Step;
use App\Models\Interest;
use App\Traits\Wizard;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Collection;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Interests extends Component implements Step
{
    use Wizard;

    public array $selectedInterests = [];

    public $selectedTipoPerfil = "";

    public Collection $interests;

    public function mount($dataInfo): void {
        $this->dataInfo = $dataInfo;

        Auth::loginUsingId(1);
        $this->interests = Interest::get();
        $this->selectedInterests = auth()->user()->interests()->pluck("interest_id")->toArray();
    }


    public function rules(): array {
        return [
            "selectedInterests" => 'required|array|between:2,' . $this->interests->count(),
        ];
    }

    public function messages(): array {
        return [
            'selectedInterests.required' => 'Debes seleccionar por lo menos 2 intereses.',
            'selectedInterests.between' => 'Debes seleccionar entre 2 y ' . $this->interests->count() . ' intereses.',
        ];
    }

    public function setInterest(int $id): void {
        if (!in_array($id, $this->selectedInterests)) {
            $this->selectedInterests[] = $id;
        } else {
            $this->selectedInterests = array_diff($this->selectedInterests, [$id]);
        }
    }

    public function submit(): void {
        $this->validate();
        auth()->user()->interests()->sync($this->selectedInterests);
        $this->nextStep();
        $this->emitTo("wizard.notification", "show", [
            "title" => "Intereses guardados",
            "message" => "Tus intereses han sido guardados correctamente",
        ]);
    }

    public function render(): Renderable {
        return view('livewire.wizard.steps.interests');
    }


    public function updatedSelectedTipoPerfil($value)
    {

    }
}
