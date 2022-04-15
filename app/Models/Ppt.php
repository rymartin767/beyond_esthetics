<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppt extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'pre_treatment',
        'post_treatment'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
