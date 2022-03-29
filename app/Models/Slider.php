<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    public $fillable = [
        'title',
        'image',
        'button_text',
        'button_link',
        'priority',
    ];
}
