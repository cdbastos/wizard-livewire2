<?php

namespace App\Http\Livewire\Wizard\Steps;

use App\Contracts\Step;
use App\Models\Skill;
use App\Traits\Wizard;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Collection;
use Livewire\Component;

class Skills extends Component implements Step
{
    use Wizard;

    /**
     * @var array
     */
    public array $selectedSkills = [];

    /**
     * @var Collection
     */
    public Collection $skills;

    public function mount(): void {
        $this->skills = Skill::get();
        $this->selectedSkills = auth()->user()->skills()->pluck("skill_id")->toArray();
    }

    /**
     * @return string[]
     */
    public function rules(): array {
        return [
            "selectedSkills" => 'required|array|between:2,' . $this->skills->count(),
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array {
        return [
            'selectedSkills.required' => 'Debes seleccionar por lo menos 2 conocimientos.',
            'selectedSkills.between' => 'Debes seleccionar entre 2 y ' . $this->skills->count() . ' conocimientos.',
        ];
    }

    /**
     * @param int $id
     * @return void
     */
    public function setSkill(int $id): void {
        if (!in_array($id, $this->selectedSkills)) {
            $this->selectedSkills[] = $id;
        } else {
            $this->selectedSkills = array_diff($this->selectedSkills, [$id]);
        }
    }

    public function submit(): void {
        $this->validate();
        auth()->user()->skills()->sync($this->selectedSkills);
        $this->nextStep();
        $this->emitTo("wizard.notification", "show", [
            "title" => "Conocimientos guardados",
            "message" => "Tus conocimientos han sido guardados correctamente",
        ]);
    }

    public function render(): Renderable {
        return view('livewire.wizard.steps.skills');
    }
}
