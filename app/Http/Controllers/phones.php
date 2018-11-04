<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class phones extends Controller
{
    public function index(){
        return view('categories.phones.index');
    }
}
