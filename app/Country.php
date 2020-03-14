<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
   protected $fillable = ['name', 'capital', 'currency', 'population'];
//1st approach er jonne ai code lagbe
   //mass assignment error er jonne amake fillable property bole dite hosse     
}
