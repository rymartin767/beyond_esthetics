<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Special extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
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

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
