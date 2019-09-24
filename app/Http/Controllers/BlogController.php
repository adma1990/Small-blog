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
    $getShow = Blog::showArtical($id);
    return view('show', compact('getShow'));
  }
}
