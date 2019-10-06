<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function article(){
      return $this->hasMany('App\Blog');
    }
}
