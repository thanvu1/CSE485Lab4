<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'name',
        'birthday',
        'address',
        'phone'
    ];
    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }
}
