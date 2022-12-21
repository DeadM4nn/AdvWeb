<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectControl extends Controller
{
    function registerForm(){
        return view('register_project');
    }
}
