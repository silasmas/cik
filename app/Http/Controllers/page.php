<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page extends Controller
{


    public function index(){
        return view('pageHtml.index');
    }
}
