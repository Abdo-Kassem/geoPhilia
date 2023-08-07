<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutFounder extends Model
{
    use HasFactory;

    protected $fillable = ['image','article'];

    public $timestamps = false;
}
