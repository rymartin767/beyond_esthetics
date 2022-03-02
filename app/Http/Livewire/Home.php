<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'employees' => Employee::all()
        ]);
    }
}
