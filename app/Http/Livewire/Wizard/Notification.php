<?php

namespace App\Http\Livewire\Wizard;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class Notification extends Component
{
    public ?array $notification = null;

    protected $listeners = [
        "show",
        "hide",
    ];

    public function show(array $notification): void
    {
        $this->notification = $notification;
        $this->emit("hideNotification");
    }

    public function hide(): void
    {
        $this->notification = null;
    }

    public function render(): Renderable
    {
        return view('livewire.wizard.notification');
    }
}
