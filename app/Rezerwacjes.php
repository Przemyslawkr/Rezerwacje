<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezerwacjes extends Model
{
    protected $fillable=[
        'id','id_user','id_object','Date_from',"Date_to"
    ];
}
