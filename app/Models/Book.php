<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\borrow;

class Book extends Model
{
    use HasFactory;
    protected $fillbale = [
        'name',
        'author',
        'category',
        'year',
        'quantity'
    ];
    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }
}
