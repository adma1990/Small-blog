<?php

namespace App\Http\Controllers;

use App\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
  public function catalog(){
    //$name = request()->input('name');
    //$comment = request()->input('comment');


    

    return view('catalog');

  }


}
