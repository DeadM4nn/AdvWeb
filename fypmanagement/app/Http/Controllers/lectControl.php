<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lectControl extends Controller
{
    function registerForm(){
        return view("register_lect");
    }
}
