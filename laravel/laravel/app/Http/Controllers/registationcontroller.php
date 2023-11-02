<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registationcontroller extends Controller
{
    public function index(){
        return view("registration");
    }
}
