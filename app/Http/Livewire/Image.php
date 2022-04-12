<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Image extends Component
{
    public $database_image_url;
    public $alt;

    public $loaded = false;

    public $url;

    public function render()
    {
        return view('livewire.image');
    }

    public function initLoading()
    {
        Storage::exists($this->database_image_url) ? $this->url = Storage::url($this->database_image_url) : $this->url = $this->database_image_url;

        $this->loaded = true;
    }
}
