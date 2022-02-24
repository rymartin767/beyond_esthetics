<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class Welcome extends Component
{
    public function render()
    {
        return view('livewire.welcome', [
            'employees' => Employee::all()
        ]);
    }
}
