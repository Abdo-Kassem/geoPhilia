<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'comment'
    ];

    public function scopeSelection($query)
    {
        return $query->select(
            'id',
            'name',
        );
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
