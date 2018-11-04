<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guide extends Controller
{
  public function index(){
      return view('categories.guide.index');
  }
}
