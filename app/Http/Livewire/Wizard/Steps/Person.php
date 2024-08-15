<?php

namespace App\Http\Livewire\Wizard\Steps;

use App\Models\AffiliationScheme;
use App\Models\Department;
use App\Models\IdentificationType;
use App\Models\Town;
use App\Traits\Wizard;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Collection;
use Livewire\Component;

class Person extends Component
{
    use Wizard;

    public \App\Models\Person $person;
    
    public Collection $identificationTypes;
    public Collection $sexes ;
    public Collection $departments;
    public Collection $towns;
    public Collection $affiliationSchemes;

    public string $selectedDepartment = "";

    public function mount($dataInfo): void {
        $this->dataInfo = $dataInfo;

        $this->person = new \App\Models\Person();

        $this->person->first_name = 'cristian';

        $this->identificationTypes = IdentificationType::select(['id','identification_type'])
            ->whereEnabled(true)->pluck('identification_type','id');

        $this->departments = Department::select(['id','department'])
            ->whereEnabled(true)->pluck('department','id');

        $this->affiliationSchemes = AffiliationScheme::whereEnabled(true)
            ->pluck('affiliation_scheme','id');

        $this->sexes = new Collection(
            ["femenino" => "Femenino",  "masculino" => "Masculino"]
        );

        $this->towns = new Collection();

    }

    public function rules(): array {
        return [
            'person.identification' => 'required',
            'person.first_name' => 'required|string|max:100',
            'person.second_name' => 'max:100',
            'person.first_surname' => 'required|string|max:100',
            'person.second_surname' => 'max:100',
            'person.birthdate' => 'date',
            'person.sex' => '',
            'person.address' => 'required|string|max:150',
            'person.phone_1' => 'required|string|max:20',
            'person.phone_2' => '',
            'person.email' => '',
            'person.affiliation_scheme_id' => 'exists:affiliation_schemes,id',
            'person.identification_type_id' => 'required|exists:identification_types,id',
            'person.town_id' => 'required|exists:towns,id',
            'selectedDepartment' => 'required|exists:departments,id',
        ];
    }

    /**
     * Nombres de las variables para la validación
     * @var string[]
     */
    protected array $validationAttributes = [
        'person.identification_type_id' => 'Tipo de identificación',
        'person.identification' => 'Identificación',
        'person.first_name' => 'Primer nombre',
        'person.second_name' => 'Segundo nombre',
        'person.first_surname' => 'Primer apellido',
        'person.second_surname' => 'Segundo apellido',
        'person.birthdate' => 'Fecha de Nacimiento',
        'person.sex' => 'Sexo',
        'person.address' => 'Dirección de residencia',
        'person.phone_1' => 'Teléfono',
        'person.phone_2' => 'Teléfono',
        'person.email' => 'Correo electrónico',
        'person.affiliation_scheme_id' => 'Régimen de afiliación',
        'person.town_id' => 'Municipio de residencia',
        'selectedDepartment' => 'Departamento de residencia',
    ];

    public function submit(): void {

//        $this->validate();
        //dd("guardando");
//        $this->person->save();
        $this->emitTo('wizard.wizard','setDataInfo', $this->person);
        $this->nextStep();
//        $this->emitTo("wizard.notification", "show", [
//            "title" => "Perfil guardado",
//            "message" => "Tu perfil ha sido guardado correctamente",
//        ]);
    }

    public function render() : Renderable
    {
        return view('livewire.wizard.steps.person');
    }

    public function updatedSelectedDepartment($value)
    {
        $this->towns = Town::whereEnabled(true)
            ->whereDepartmentId((int)$value)
            ->pluck('town','id');
    }

}
