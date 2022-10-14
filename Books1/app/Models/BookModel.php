<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    use HasFactory;
      // protected $table = 'book_models';
    // protected $filelable = ['book_image', 'book_title', 'book_description', 'book_author'];
    public $timestamps = false;
}
