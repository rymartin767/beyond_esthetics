<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'imageable_id', 
        'imageable_type', 
        'url', 
        'tag'
    ];

    protected static function booted()
    {
        static::deleting(function ($image) {
            Storage::delete($image->url);
        });
    }

    public function imageable()
    {
        return $this->morphTo();
    }
}
