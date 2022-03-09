<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id', 'date', 'name', 'comments', 'social_media', 'social_media_username'
    ];

    public function scopeGeneral($query)
    {
        $id = Service::where('name', 'general')->get()->first()->id;
        return $query->where('service_id', $id);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
