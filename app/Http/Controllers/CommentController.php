<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{

  public function comment(){
  //Выводим комментарии на страницу
  $comments = Comment::all();
  return view('comment', compact('comments'));
  }

  
  public function store(Request $request){

    $validatedData = $request->validate([
        'nickname' => 'required|max:100',
        'comment' => 'required',
    ]);

    $name = request()->input('nickname');
    $comment = request()->input('comment');

    $insert = DB::table('comments')->insert([
    'nickname' => $name,
    'comment' => $comment,
   ]);

    return redirect()->back();
  }



}
