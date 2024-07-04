<?php

namespace App\Http\Livewire\Wizard;

use App\Traits\Wizard;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class Buttons extends Component
{
    use Wizard;

    public bool $hidePrevButton = false;

    public bool $isLastStep = false;

    public function render() : Renderable
    {
        return view('livewire.wizard.buttons');
    }
}
