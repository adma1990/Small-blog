<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public static function gallery(){
      $gallery = DB::table('blogs')->select('image')->get();
      return $gallery;
    }
}
