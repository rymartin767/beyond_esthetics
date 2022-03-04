<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Special extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'sale_price',
        'start_date',
        'end_date',
        'locations',
        'image_url'
    ];

    protected $casts = [
        'locations' => 'array'
    ];

    protected static function booted()
    {
        static::deleting(function ($special) {
            if ($special->image_url !== null) {
                Storage::delete($special->image_url);
            }
        });
    }

    public function image()
    {
        if($this->image_url !== null) {
            if(Storage::exists($this->image_url)) {
                return Storage::url($this->image_url);
            }
        }

        return 'images/services/default_portrait.jpg';
    }
}
