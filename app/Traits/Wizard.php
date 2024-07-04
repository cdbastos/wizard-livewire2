<?php
namespace App\Traits;

trait Wizard {
    public function prevStep(): void {
        $this->emitTo("wizard.wizard", "prevStep");
    }

    public function nextStep(): void {
        $this->emitTo("wizard.wizard", "nextStep");
    }
}
