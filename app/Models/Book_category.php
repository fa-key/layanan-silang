<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_category extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function books(){
        return $this->hasMany(Book::class);
    }
}
