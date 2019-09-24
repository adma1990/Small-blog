<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public static function getCardBlog(){
      $blog = DB::table('blogs')->get();
      return $blog;
    }

    public static function showArtical($id){
      $show = DB::table('blogs')->find($id);
      return $show;
    }
}
