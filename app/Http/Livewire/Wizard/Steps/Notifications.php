<?php

namespace App\Http\Livewire\Wizard\Steps;

use App\Contracts\Step;
use App\Models\Notification;
use App\Traits\Wizard;
use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

class Notifications extends Component implements Step
{
    use Wizard;

    public Notification $notification;

    public function mount(): void {
        $this->notification = auth()->user()->notification()->firstOrNew();
    }

    public function rules(): array {
        return [
            "notification.receive_newsletter" => "sometimes|boolean",
            "notification.receive_promotions" => "sometimes|boolean",
        ];
    }

    public function submit(): void {
        $this->validate();
        $this->notification->user_id = auth()->id();
        $this->notification->save();
        $this->nextStep();
        $this->emitTo("wizard.notification", "show", [
            "title" => "Notificaciones guardadas",
            "message" => "Tus notificaciones han sido guardadas correctamente",
        ]);
    }

    public function render(): Renderable {
        return view('livewire.wizard.steps.notifications');
    }
}
