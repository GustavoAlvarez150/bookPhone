<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bookPhone extends Model
{
    protected $table = 'phone';
    protected $fillable = ['name','phone','birthdate'];
    public $timestamps = false;
}
