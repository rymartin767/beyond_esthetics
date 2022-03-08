<?php

namespace App\Http\Livewire;

use App\Models\Review;
use Livewire\Component;
use App\Models\Employee;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'employees' => Employee::with('image')->get(),
            'reviews' => Review::general()->get()
        ]);
    }
}
