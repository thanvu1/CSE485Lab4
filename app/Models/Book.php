<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> mergecode

class Book extends Model
{
    //
<<<<<<< HEAD
=======
    use HasFactory; 
    protected $fillable = ['name', 'author', 'category', 'year', 'quantity'];
    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }
>>>>>>> mergecode
}
