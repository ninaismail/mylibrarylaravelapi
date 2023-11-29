<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'brief',
        'description',
        'cover_image',
        'images',
        'deposit',
        'is_available',
        'literature_origin',
        'date_of_release',
    ];
}
