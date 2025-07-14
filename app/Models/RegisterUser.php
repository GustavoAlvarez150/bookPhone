<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterUser extends Model
{
    protected $table ="users";
    protected $fillable = ['mail','password'];
    public $timestamps = false;
}
