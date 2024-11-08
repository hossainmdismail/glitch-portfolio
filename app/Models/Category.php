<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'parent_id',
        'thumbnail',
        'seo_title',
        'seo_description',
        'seo_tags',
    ];
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function post()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
    protected $casts = [
        'seo_tags' => 'array',
    ];
}
