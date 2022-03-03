<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'locations', 'description', 'bullets', 'msrp', 'image_urls', 'video_urls'];

    protected $casts = [
        'locations' => 'array',
        'image_urls' => 'array',
        'video_urls' => 'array'
    ];

    protected function slug(): Attribute
    {
        return Attribute::make(
            get: fn () => str($this->name)->slug(),
        );
    }

    public function logos()
    {
        $key = str($this->name)->slug();
        return config("general.logos.$key");
    }

    protected static function booted()
    {
        static::deleting(function ($service) {
            if ($service->image_urls !== null) {
                foreach($service->image_urls as $url) {
                    Storage::delete($url);
                }
            }
        });
    }

    public function specials()
    {
        $this->hasMany(Special::class);
    }
}
