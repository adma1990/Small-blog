<?php

namespace App\Http\Controllers;

use App\Index;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function index(){
    return view('index');
  }
}
