<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
  //Получаем статьи из базы данных в виде карточек.
    public static function getCardBlog(){
      $blog = DB::table('blogs')->simplePaginate(2);
      return $blog;
    }
  //Получаем индивидуальную страницу со статьей
  //при переходе по ссылке с карточки
    public static function showArtical($id){
      $show = DB::table('blogs')->find($id);
      return $show;
    }
   //Обработка формы для комментариев пользователей
   //и запись комментов в БД
    // public static function commentBlog(){
    //   $validatedData = request()->validate([
    //       'nickname' => 'required|max:100',
    //       'comment' => 'required',
    //   ]);
    //
    //   $name = request()->input('nickname');
    //   $comment = request()->input('comment');
    //
    //   $insert = DB::table('comments')->insert([
    //   'nickname' => $name,
    //   'comment' => $comment,
    //  ]);
    //
    //   return redirect()->back();
    // }
   //Получение коментов из базы данных для
   //полседующего отображения на странице
    // public static function getCommentBlog(){
    //   $blog = DB::table('comments')->get();
    //   return $blog;
    // }
}
