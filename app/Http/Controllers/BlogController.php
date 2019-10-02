<?php

namespace App\Http\Controllers;


use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

  public function blog(){
    $blogs = Blog::get();
    return view('blog', compact('blogs'));

  }

  public function show($id){
    $getShow = Blog::find($id);
    return view('show', compact('getShow'));
  }


}
