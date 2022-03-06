<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait InteractsWithS3
{
    public function image()
    {
        if ($this->image_url !== null && Storage::exists($this->image_url)) {
            return Storage::url($this->image_url);
        }

        return 'images/coming_soon.png';
    }
}