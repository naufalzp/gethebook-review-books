<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlists';
    
    protected $fillable = [
        'user_id',
        'book_id',
        'marked_as_read'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

}
