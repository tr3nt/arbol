<?php

namespace App\Livewire;

use App\Models\Person;
use Illuminate\Http\JsonResponse;
use Livewire\Component;

class Home extends Component
{
    public array $form;

    public function create() : void
    {
        $this->validate(vRules(Person::class));
        Person::create($this->form);
        session()->flash('message', 'Familiar creado correctamente');
    }

    public function messages() : array
    {
        return vMessages(Person::class);
    }
}
