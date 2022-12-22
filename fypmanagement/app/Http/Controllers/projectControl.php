<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\lect;
use App\Models\project;

class projectControl extends Controller
{
    function registerForm($id){
        $super = lect::all();
        return view('register_project', ["super"=>$super, 'student_id'=>$id]);
    }

    function updateForm($id){
        $data = project::find($id);
        return view('update_project', ['data'=>$data]);
    }

    function updateProcess(Request $req){
        $update_proj = project::find($req->project_student_id);
        $update_proj->title = $req->project_title;
        $update_proj->start_date = $req->project_start_date;
        $update_proj->end_date = $req->project_end_date;
        $update_proj->duration = $req->project_duration;
        $update_proj->progress = $req->project_progress;
        $update_proj->status = $req->project_status;
        $update_proj->type = $req->project_type;
        $update_proj->save();
        return redirect("/project/view/$req->project_student_id");
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
        $new_proj->supervisor_email = $req->project_supervisor_email;
        $new_proj->save();
        $id = $req->project_student_id;
        return redirect("/project/view/$id");
    }

    function showList(){
        $data = project::all();
        return view("view_project_list", ["data"=>$data]);
    }

    function showDetail($id){
        $data = DB::table('projects')
                        ->where('student_id', $id)
                        ->join('students', 'projects.student_id', '=', 'students.id')
                        ->select('projects.*' ,'students.name', 'students.contact')
                        ->get();

                        //Supervisor
                        $lect_data = DB::table('projects')
                        ->where('student_id', $id)
                        ->leftJoin('lects', 'projects.supervisor_email', '=', 'lects.email')
                        ->select('lects.name')
                        ->get();

                        //Examiner #1
                        $exa_one = DB::table('projects')
                        ->where('student_id', $id)
                        ->leftJoin('lects', 'projects.examiner_email_one', '=', 'lects.email')
                        ->select('lects.name')
                        ->get();

                        //Examiner #1
                        $exa_two = DB::table('projects')
                        ->where('student_id', $id)
                        ->leftJoin('lects', 'projects.examiner_email_two', '=', 'lects.email')
                        ->select('lects.name')
                        ->get();
        return view("view_project_detail", ["data"=>$data, "lect_data" =>$lect_data, 'exa_one' => $exa_one, 'exa_two' => $exa_two]);
    }

    function assignSupervisorForm($id){
        $data = project::find($id);
        $super = lect::all();
        return view("assign_supervisor",['data'=>$data, 'super' => $super]);
    }

    function assignExaminerOneForm($id){
        $data = project::find($id);
        $super = lect::all();
        return view("assign_examiner_one",['data'=>$data, 'super' => $super]);
    }


    function assignExaminerTwoForm($id){
        $data = project::find($id);
        $super = lect::all();
        return view("assign_examiner_two",['data'=>$data, 'super' => $super]);
    }


    function assign(Request $req){
        $cur_proj = project::find($req->student_id);
        $cur_proj->supervisor_email = $req->supervisor_email;
        $cur_proj->examiner_email_one = $req->examiner_email_one;
        $cur_proj->examiner_email_two = $req->examiner_email_two;
        $cur_proj->save();
        return redirect("/project/view/$req->student_id");
    }

    function delete($id){
        $data = project::find($id);
        $data->delete();
        return redirect("/project");
    }
}
