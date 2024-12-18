<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Borrow extends Model
{
    //
    use HasFactory; 
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    public function reader()
    {
        return $this->belongsTo(Reader::class);
    }
}
