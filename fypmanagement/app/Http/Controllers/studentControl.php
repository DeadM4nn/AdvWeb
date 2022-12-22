<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Route;
use Illuminate\Http\Request;
use App\Models\student;
use App\Models\project;

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
        return redirect("student");
    }

    function showList(){
        $data = student::paginate(5);
        $project = project::pluck("student_id");
        //$project = $project->collapse();
        return view('view_student_list', ['data'=>$data, 'project_list' => $project]);
    }

    function deleteStudent($id){
        $student = student::find($id);
        $student->delete();
        $project = project::pluck("student_id");
        
        //If the student has a project, delete this aswell
        if($project->contains($id)){
            $project_del = project::find($id);
            $project_del->delete();
        }

        return redirect("student");
    }

    function updateForm($id){
        $student = student::find($id);
        return view("update_student", ["cur"=>$student]);
    }

    function updateProcess(Request $req){
        $cur_data = student::find($req->student_id);
        $cur_data->id = $req->student_id;
        $cur_data->name = $req->student_name;
        $cur_data->gender = $req->student_gender;
        $cur_data->address = $req->student_address;
        $cur_data->contact = $req->student_contact;
        $cur_data->save();
        return redirect("student");
    }
}
