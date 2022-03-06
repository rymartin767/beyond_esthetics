<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'bio',
        'image_url'
    ];

    // Model Events
    protected static function booted()
    {
        static::deleting(function ($employee) {
            if ($employee->image_url !== null) {
                Storage::delete($employee->image_url);
            }
        });
    }

    public function image()
    {
        if ($this->image_url !== null && Storage::exists($this->image_url)) {
            return Storage::url($this->image_url);
        }

        return 'images/coming_soon.png';
    }
}
