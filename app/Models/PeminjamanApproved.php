<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanApproved extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    protected $with = ['user', 'book'];

    public function user(){
        return $this->belongsTo(User::class);//satu peminjaman miliknya satu user
    }

    public function book(){
        return $this->belongsTo(Book::class);
    }
}
