<?php

namespace App\Http\Livewire\Wizard\Steps;

use App\Contracts\Step;
use App\Traits\Wizard;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Profile;

class Avatar extends Component implements Step
{
    use Wizard;

    use WithFileUploads;

    /**
     * @var Profile
     */
    public Profile $profile;

    /**
     * @var string|UploadedFile|null
     */
    public string|UploadedFile|null $profileAvatar = null;

    public function mount(): void {
        $this->profile = auth()->user()->profile()->firstOrNew();
        $this->profileAvatar = $this->profile->profileAvatarUrl();
    }

    /**
     *
     * Reglas de validación
     *
     * @return array
     */
    public function rules(): array {
        $validation = ['profileAvatar' => ''];

        if ($this->profileAvatar instanceof UploadedFile) {
            $validation['profileAvatar'] = 'required|image|mimes:jpeg,png|max:4096';
        }

        return $validation;
    }

    public function submit(): void {
        $this->validate();
        $this->syncAvatar();
        $this->profile->save();
        $this->nextStep();
        $this->emitTo("wizard.notification", "show", [
            "title" => "Avatar guardado",
            "message" => "Tu avatar ha sido guardado correctamente",
        ]);
    }

    protected function syncAvatar(): void {
        if ($this->profileAvatar instanceof UploadedFile) {
            if ($this->profile->avatar) {
                Storage::delete(sprintf("%s/%s", Profile::AVATARS_PATH, $this->profile->avatar));
            }
            $avatar = sprintf("%d-%s.%s", auth()->id(), Str::uuid(), $this->profileAvatar->getClientOriginalExtension());
            $this->profileAvatar->storeAs(Profile::AVATARS_PATH, $avatar);
            $this->profile->avatar = $avatar;
        }
    }

    public function render(): Renderable {
        return view('livewire.wizard.steps.avatar');
    }

}
