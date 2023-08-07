<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand',
        'link',
        'photo',
    ];
    public function scopeSelection($query)
    {
        return $query->select(
            'id',
            'brand',
            'link',
            'photo',
        );
    }

    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('uploads/brand_images/' . $val) : "";
    }
}
