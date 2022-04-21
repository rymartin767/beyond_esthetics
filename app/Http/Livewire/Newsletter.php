<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Livewire\Component;

class Newsletter extends Component
{
    public $showForm = true;

    // FORMDATA
    public $name;
    public $email;

    public function render()
    {
        return view('livewire.newsletter');
    }

    public function formSubmitted()
    {
        $this->validate([
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'email' => ['required', 'unique:App\Models\Subscriber,email', 'email']
        ]);

        Subscriber::create(['name' => $this->name, 'email' => $this->email]);

        $this->showForm = false;
    }
}
