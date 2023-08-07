<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'review',
        'photo',
        'details',
        'cat_id',
    ];
    public function scopeSelection($query)
    {
        return $query->select(
            'id',
            'review',
            'photo',
            'details',
            'cat_id',
        );
    }

    public function getPhotoAttribute($val)
    {
        return ($val !== null) ? asset('uploads/review_images/' . $val) : "";
    }
    public  function category()
    {
        return $this->belongsTo(MainCategory::class, 'cat_id', 'id');
    }
}
