<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutInitiative extends Model
{
    use HasFactory;

    protected $fillable = ['article'];

    public $timestamps = false;
}
