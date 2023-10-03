<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rulesreg extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'content',
    ];
}
