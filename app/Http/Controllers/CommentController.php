<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

  public function comment(){

  //Добавляет запись в базу данных через Форму
  $com = Comment::recComment();

  //Выводим комментарии на страницу
  $comments = Comment::getComment();

  return view('comment', compact('comments'));
  }



}
