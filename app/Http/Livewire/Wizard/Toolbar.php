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
            "label" => "Datos Personales",
        ],
        "interests" => [
            "step" => 2,
            "label" => "Caracterización de Perfil",
        ],
        "finish" => [
            "step" => 3,
            "label" => "Finalizar registro",
        ],
//        "skills" => [
//            "step" => 4,
//            "label" => "Motivo de la PQR",
//        ],
//        "avatar" => [
//            "step" => 4,
//            "label" => "Anexos",
//        ],
//        "notifications" => [
//            "step" => 5,
//            "label" => "Notificaciones",
//        ],

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
