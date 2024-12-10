<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $primaryKey = 'id_books';
    protected $fillable = ['title', 'image', 'author', 'publish_year', 'description', 'category_id', 'books'];

    public function category()
    {
        return $this->belongsTo(BookCategory::class, 'category_id', 'id_category');
    }
}
