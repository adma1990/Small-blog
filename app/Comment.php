<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

   //Получаем данные на странице из БД, таблицы comments
    public static function getComment(){
      $blog = DB::table('comments')->get();
      return $blog;
    }


    // функция запись комментариев пользователей в БД в таблицу comments
    public static function recComment(){
      $validatedData = request()->validate([
          'nickname' => 'required|max:100',
          'comment' => 'required',
      ]);

      $name = request()->input('nickname');
      $comment = request()->input('comment');
      DB::table('comments')->insert([
      'nickname' => $name,
      'comment' => $comment,
     ]);

      return redirect()->back();
    }
}
