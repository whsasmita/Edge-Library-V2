<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;

    protected $table = 'books_category';
    protected $primaryKey = 'id_category';
    protected $fillable = ['category'];

    public function books()
    {
        return $this->belongsTo(Book::class, 'category_id', 'id_category');
    }
}
