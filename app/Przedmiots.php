<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Przedmiots extends Model
{
   protected $table='przedmiots';
   protected $fillable = [
     'Description','Price'  
   ];
  
}
