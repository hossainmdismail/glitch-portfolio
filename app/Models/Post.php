<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'thumbnail',
        'seo_title',
        'seo_description',
        'seo_tags',
        'is_published',
        'user_id',
        'category_id',
    ];

    /**
     * Get the user (author) that owns the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the category that the post belongs to.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    protected $casts = [
        'is_published' => 'boolean',
        'seo_tags' => 'array'
    ];
}
