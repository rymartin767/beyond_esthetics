<?php

namespace App\Http\Livewire;

use App\Models\Employee;
use App\Models\Review;
use App\Models\Service;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $id = Service::where('name', 'General')->get()->first()->id;
        $reviews = Review::where('service_id', $id)->get();

        return view('livewire.home', [
            'employees' => Employee::all(),
            'reviews' => $reviews
        ]);
    }
}
