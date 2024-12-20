<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> mergecode

class Borrow extends Model
{
    //
<<<<<<< HEAD
=======
    use HasFactory; 
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    public function reader()
    {
        return $this->belongsTo(Reader::class);
    }
>>>>>>> mergecode
}
