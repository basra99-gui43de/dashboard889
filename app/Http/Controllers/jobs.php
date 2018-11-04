<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobs extends Controller
{
    //
    public function index(){
        return view('categories.jobs.index');
    }
}
