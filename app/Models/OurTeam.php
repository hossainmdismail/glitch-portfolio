<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurTeam extends Model
{
    protected $fillable = [
        'name',
        'profile',
        'role',
        'social_media',
    ];

    protected $casts = [
        'social_media' => 'array', // Cast social media field as an array
    ];
}
