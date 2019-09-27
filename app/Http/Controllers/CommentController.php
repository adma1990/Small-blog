<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{

  public function comment(){
  //Выводим комментарии на страницу
  $comments = Comment::getComment();
  return view('comment', compact('comments'));
  }

  //вызов функции recComment. Запись в БД comments
  public function store(){

  return Comment::recComment();
  }

}
