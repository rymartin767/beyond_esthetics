<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use App\Models\Review;
use App\Models\Service;
use Livewire\Component;
use App\Models\Employee;

class Home extends Component
{
    public function render()
    {
        $id = Service::where('name', 'General')->sole()->id;

        return view('livewire.home', [
            'employees' => Employee::with('image')->get(),
            'reviews' => Review::general()->get(),
            'faqs' => Faq::where('service_id', $id)->get()
        ]);
    }
}
