<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'qualifications',
        'bio',
    ];

    public $casts = [
        'qualifications' => 'array',
    ];

    protected static function booted()
    {
        static::deleting(function ($employee) {
            if (!is_null($employee->image)) {
                $employee->image->delete();
            }
        });
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
