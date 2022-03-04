<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id', 'date', 'name', 'comments', 'social_media', 'social_media_username', 'image_url'
    ];

    protected static function booted()
    {
        static::deleting(function ($review) {
            if ($review->image_url !== null) {
                Storage::delete($review->image_url);
            }
        });
    }

    public function image()
    {
        if($this->image_url !== null) {
            return Storage::url($this->image_url);
        }

        return 'images/quote.svg';
    }
}
