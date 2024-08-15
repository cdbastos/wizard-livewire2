<?php

namespace App\Http\Livewire\Wizard\Steps;

use App\Contracts\Step;
use App\Models\User;
use App\Traits\Wizard;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Finish extends Component implements Step
{
    use Wizard;

    public User $user;

    public function mount(): void {
        Auth::loginUsingId(1);
        $this->user = auth()->user();;
        $this->user->load("profile", "interests", "skills", "notification");
    }

    public function submit(): void {
        $this->emitTo("wizard.notification", "show", [
            "title" => "Perfil guardado",
            "message" => "Tu perfil ha sido guardado correctamente",
        ]);
        $this->nextStep();
    }

    public function render(): Renderable {
        return view('livewire.wizard.steps.finish');
    }
}
