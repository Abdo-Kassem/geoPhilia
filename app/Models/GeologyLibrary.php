<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeologyLibrary extends Model
{
    use HasFactory;

    protected $fillable = ['filePath','fileName','comment'];

    public $timestamps = false;
}
