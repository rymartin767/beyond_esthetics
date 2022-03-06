<?php

namespace App\Models;

use App\Traits\InteractsWithS3;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory, InteractsWithS3;

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
}
