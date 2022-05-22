<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Special extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'sale_price',
        'start_date',
        'end_date',
        'locations',
        'is_featured',
    ];

    protected $casts = [
        'locations' => 'array'
    ];

    protected static function booted()
    {
        static::deleting(function ($special) {
            if (!is_null($special->image)) {
                $special->image->delete();
            }
        });
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeCurrent($query)
    {
        return $query->where('end_date', '>=', now());
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
