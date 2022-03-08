<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'type', 
        'locations', 
        'treatments', 
        'description', 
        'bullets', 
        'msrp',
        'video_url'
    ];

    protected $casts = [
        'locations' => 'array',
        'treatments' => 'array'
    ];

    protected function slug(): Attribute
    {
        return Attribute::make(
            get: fn () => str($this->name)->slug(),
        );
    }

    protected static function booted()
    {
        static::deleting(function ($service) {
            $service->images->each(fn($image) => $image->delete());
        });
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
