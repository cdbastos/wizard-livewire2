<?php

namespace App\Http\Livewire\Wizard;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class Toolbar extends Component
{
    public int $currentStep;

    public array $steps = [
        "profile" => [
            "step" => 1,
            "label" => "Datos Básicos",
        ],
        "interests" => [
            "step" => 2,
            "label" => "Descripción de la PQR",
        ],
        "skills" => [
            "step" => 3,
            "label" => "Motivo de la PQR",
        ],
        "avatar" => [
            "step" => 4,
            "label" => "Anexos",
        ],
        "notifications" => [
            "step" => 5,
            "label" => "Notificaciones",
        ],
        "finish" => [
            "step" => 6,
            "label" => "Finalizar",
        ],
    ];

    protected $listeners = [
        "updateCurrentStep",
    ];

    public function updateCurrentStep(int $currentStep): void {
        $this->currentStep = $currentStep;
    }

    public function render(): Renderable {
        return view('livewire.wizard.toolbar');
    }
}
