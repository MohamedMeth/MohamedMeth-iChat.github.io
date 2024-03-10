<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iChat extends Model
{
    use HasFactory;
    protected $table = 'ichat';
    protected $fillable = [
        'content',
        'likes',
    ];
}

