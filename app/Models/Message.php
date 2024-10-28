<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'text',
        'color',
        'image_url',
        'underline',
        'bold',
    ];
}
