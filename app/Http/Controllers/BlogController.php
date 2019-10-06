<?php

namespace App\Http\Controllers;


use App\Blog;
use App\Categorie;
use Illuminate\Http\Request;

class BlogController extends Controller
{

  public function blog(){
    $cats = Categorie::get();
    $blogs = Blog::get();
    return view('blog', compact('blogs', 'cats'));

  }


  public function show($id){
    $getShow = Blog::find($id);
    return view('show', compact('getShow'));
  }

  public function show_ganre($id){
    $ganres = Categorie::find($id)->article;

    return view('show_ganre', compact('ganres'));
  }


}
