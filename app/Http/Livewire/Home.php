<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use App\Models\Review;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $reviews = Review::where('name', 'General')->get();

        return view('livewire.home', [
            'employees' => Employee::all(),
            'reviews' => $reviews
        ]);
    }
}
