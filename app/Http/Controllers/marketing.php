<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class marketing extends Controller
{
    //
    public function index(){
        return view('categories.marketing.index');
    }
}
