<?php

namespace App\Http\Livewire;

use App\Models\Faq;
use App\Models\Review;
use App\Models\Service;
use Livewire\Component;
use App\Models\Employee;
use App\Models\Special;

class Home extends Component
{
    public function render()
    {
        $id = Service::where('name', 'General')->sole()->id;

        return view('livewire.home', [
            'reviews' => Review::general()->get()->random(7),
            'faqs' => Faq::where('service_id', $id)->get(),
            'specials' => Special::featured()->get()->take(3)
        ]);
    }
}
