<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'action',
    ];

    public function scopeSelection($query)
    {
        return $query->select(
            'id',
            'name',
            'action',
        );
    }
}
