<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bookPhone extends Model
{
    protected $table = 'book_phones';
    protected $fillable = ['name','phone','date'];
    public $timestamps = false;
}
