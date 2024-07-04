<?php

namespace App\Http\Livewire\Wizard;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class Wizard extends Component
{
    public int $currentStep;

    public string $currentComponent;

    public array $components = [
        "person", "interests", "skills", "avatar", "notifications", "finish",
    ];

    protected $listeners = [
        "prevStep",
        "nextStep",
    ];

    public function mount(): void {
        $this->currentComponent = $this->components[$this->currentStep - 1];
        $this->emitTo("wizard.toolbar", "updateCurrentStep", $this->currentStep);
    }

    public function prevStep(): void {
        if ($this->currentStep === 1) return;
        $this->updateStepData(false);
    }

    public function nextStep(): void {
        if ($this->currentStep === count($this->components)) dd("Has finalizado el proceso");
        $this->updateStepData();
    }

    /**
     * @param bool $isNext
     * @return void
     */
    protected function updateStepData(bool $isNext = true): void {
        $this->currentStep = $isNext ? $this->currentStep += 1 : $this->currentStep -= 1;
        $this->currentComponent = $this->components[$this->currentStep - 1];
        $this->emitTo("wizard.toolbar", "updateCurrentStep", $this->currentStep);
    }

    public function render(): Renderable {
        return view('livewire.wizard.wizard');
    }
}
