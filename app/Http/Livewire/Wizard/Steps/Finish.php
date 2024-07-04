<?php

namespace App\Http\Livewire\Wizard\Steps;

use App\Contracts\Step;
use App\Models\User;
use App\Traits\Wizard;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class Finish extends Component implements Step
{
    use Wizard;

    public User $user;

    public function mount(): void {
        $this->user = auth()->user();
        $this->user->load("profile", "interests", "skills", "notification");
    }

    public function submit(): void {
        $this->nextStep();
    }

    public function render(): Renderable {
        return view('livewire.wizard.steps.finish');
    }
}
