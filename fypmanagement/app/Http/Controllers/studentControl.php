<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Route;
use Illuminate\Http\Request;
use App\Models\student;

class studentControl extends Controller
{
    function registerForm(){
        return view("register_student");
    }

    function registerProcess(Request $req){
        $new_student = new student;
        $new_student->id = $req->student_id;
        $new_student->name = $req->student_name;
        $new_student->gender = $req->student_gender;
        $new_student->address = $req->student_address;
        $new_student->contact = $req->student_contact;
        $new_student->save();
        return view("register_student");
    }
}
