<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{


  //Функция на добавление в БД комментарий через Форму
    public static function recComment(){
      $name = request('nickname');
      $comment = request('comment');
      DB::table('comments')->insert([
        'nickname' => $name,
        'comment' => $comment,
      ]);
    }


   //Получаем данные на странице из БД, таблицы comments
    public static function getComment(){
      $blog = DB::table('comments')->get();
      return $blog;

    }
}
