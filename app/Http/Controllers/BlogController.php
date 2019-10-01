<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

  public function blog(){
    $getCards = Blog::getCardBlog();
    return view('blog', compact('getCards'));
  }

  public function show($id){
    $getShow = Blog::showArtical($id);//получаем статью на странице
    //$getCommentBlog = Blog::getCommentBlog();//Отображаем комменты на странице
    return view('show', compact('getShow', 'getCommentBlog'));
  }

  //public function storeBlog(){
    //return Blog::commentBlog();
  //}
}
