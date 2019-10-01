<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
  public function gallery(){
    $gallerys = Gallery::gallery();
    return view('gallery', compact('gallerys'));
  }
}
