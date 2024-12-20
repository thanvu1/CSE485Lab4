<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> mergecode

class Reader extends Model
{
    //
<<<<<<< HEAD
    use HasFactory;
    protected $fillable = [
        'name',
        'birthday',
        'address',
        'phone'
    ];
=======
    use HasFactory; 
>>>>>>> mergecode
    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }
<<<<<<< HEAD
=======

>>>>>>> mergecode
}
