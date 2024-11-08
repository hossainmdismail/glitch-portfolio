<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = [
        'name',
        'email',
        'address',
        'number',
        'link',
        'logo',
        'fav',
        'status'
    ];
    protected static function booted()
    {
        static::updating(function ($model) {
            // Check if the logo is being changed
            if ($model->isDirty('logo')) {
                Storage::disk('public')->delete($model->getOriginal('logo'));
            }

            // Check if the fav icon is being changed
            if ($model->isDirty('fav')) {
                Storage::disk('public')->delete($model->getOriginal('fav'));
            }
        });

        static::deleting(function ($model) {
            // Delete both images when the record is deleted
            Storage::disk('public')->delete($model->logo);
            Storage::disk('public')->delete($model->fav);
        });
    }
}
