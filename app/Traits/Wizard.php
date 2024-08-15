<?php
namespace App\Traits;

trait Wizard {
    public function prevStep(): void {
        sleep(1);
        $this->emitTo("wizard.wizard", "prevStep");
    }

    public function nextStep(): void {
        sleep(1);
        $this->emitTo("wizard.wizard", "nextStep");
    }

    public $dataInfo = null ;

    public function submit() : void
    {

    }
}
