<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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
    ];

    protected $casts = [
        'locations' => 'array'
    ];

    protected static function booted()
    {
        static::deleting(function ($special) {
            $special->image->delete();
        });
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
