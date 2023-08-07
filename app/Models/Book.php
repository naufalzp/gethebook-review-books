<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Review;
use App\Models\Wishlist;

class Book extends Model
{
    use HasFactory;

    public function genres()
    {
        return $this->belongsToMany(Genre::class)->withTimestamps();
    }


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }


    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }
    
}
