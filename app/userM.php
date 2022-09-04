<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userM extends Model
{
    protected $table='usersimg';
    protected $fillable=['name','age','image'];
}
