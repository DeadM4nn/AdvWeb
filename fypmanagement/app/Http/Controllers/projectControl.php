<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\lect;
use App\Models\project;

class projectControl extends Controller
{
    function registerForm(){
        $super = lect::all();
        return view('register_project', ["super"=>$super]);
    }

    function registerProcess(Request $req){
        $new_proj = new project;
        $new_proj->student_id = $req->project_student_id;
        $new_proj->title = $req->project_title;
        $new_proj->start_date = $req->project_start_date;
        $new_proj->end_date = $req->project_end_date;
        $new_proj->duration = $req->project_duration;
        $new_proj->progress = $req->project_progress;
        $new_proj->status = $req->project_status;
        $new_proj->type = $req->project_type;
        $new_proj->supervisor_id = $req->supervisor_id;
        $new_proj->save();
        $id = $req->project_student_id;
        return redirect("/project/view/$id");
    }
}
