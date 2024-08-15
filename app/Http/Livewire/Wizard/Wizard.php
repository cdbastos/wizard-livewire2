<?php

namespace App\Http\Livewire\Wizard;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Collection;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Wizard extends Component
{
    public int $currentStep;

    public string $currentComponent;

    public $dataInfo = [
        "name" => "cristian",
        "email" => "",
        "phone" => "",
        "address" => "",
    ];

    public array $components = [
//        "person", "interests", "skills", "avatar", "notifications", "finish",
        "person", "interests", "finish",
    ];

    protected $listeners = [
        "prevStep",
        "nextStep",
        "setDataInfo",
        "sendDataInfo"
    ];

    public function mount(): void {
        Auth::loginUsingId(1);

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

    public function setDataInfo($person)
    {
        $this->dataInfo = $person;
    }

    public function render(): Renderable {
        return view('livewire.wizard.wizard');
    }
}
