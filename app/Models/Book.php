<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\BookAuthor;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'publication_year'];

    public function author() 
    {
        return $this->hasManyThrough(
            'Author',
            'BookAuthor',
            'book_id',
            'id',
            'id',
            'author_id'
        );
    }
}
