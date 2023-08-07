<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeoGallary extends Model
{
    use HasFactory;

    protected $fillable = ['comment','fileName','type'];

    public $timestamps = false;

    
}
