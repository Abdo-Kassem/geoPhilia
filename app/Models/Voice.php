<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voice extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'audio',
        'details',
        // 'cat_id',
    ];
    public function scopeSelection($query)
    {
        return $query->select(
            'id',
            'title',
            'audio',
            'details',
            // 'cat_id',
        );
    }
    public function getAudioAttribute($val)
    {
        return ($val !== null) ? asset('uploads/audio/' . $val . '/' . $val) : "";
    }
}
