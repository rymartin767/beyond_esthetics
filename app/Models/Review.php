<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id', 'date', 'name', 'comments', 'social_media', 'social_media_username'
    ];

    public function scopeGeneral($query)
    {
        return $query->where('id', 1);
    }
}
