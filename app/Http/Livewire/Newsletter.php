<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subscriber;
use App\Traits\InteractsWithMailchimp;

class Newsletter extends Component
{
    use InteractsWithMailchimp;

    public $showForm = true;

    // FORMDATA
    public $first_name;
    public $last_name;
    public $email;

    public function render()
    {
        return view('livewire.newsletter');
    }

    public function formSubmitted()
    {
        $this->validate([
            'first_name' => ['required', 'string', 'min:2', 'max:50'],
            'last_name' => ['required', 'string', 'min:2', 'max:50'],
            'email' => ['required', 'unique:App\Models\Subscriber,email', 'email']
        ]);

        $subscriber = Subscriber::make([
            'first_name' => $this->first_name, 
            'last_name' => $this->last_name, 
            'email' => $this->email
        ]);

        $added = $this->addSubscriberToMailchimpAudience($subscriber);

        if($added) {
            $subscriber->save();
            $this->showForm = false;
        }
    }
}
