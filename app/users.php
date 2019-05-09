<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    public $timestamps=false;
    protected $table='users';
    protected $fillable=['id', 'name', 'email', 'password'];
}
