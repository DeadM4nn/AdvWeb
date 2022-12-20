<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Route;
use Illuminate\Http\Request;

class studentControl extends Controller
{
    function registerStudentpage(){
        return view("register_student");
    }
}
