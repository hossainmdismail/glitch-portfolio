<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'thumbnail',
        'tech',
        'liked_by',
        'price',
        'link',
    ];

    // Define casts for specific fields
    protected $casts = [
        'tech' => 'array',       // Ensure tech images are handled as an array
        'price' => 'decimal:2',  // Store price as decimal with two decimal places
    ];
}
