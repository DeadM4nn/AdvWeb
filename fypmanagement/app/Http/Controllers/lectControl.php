<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lect;
use App\Models\project;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class lectControl extends Controller
{
    function registerForm(){
        if(!Auth::user()->is_coord){
            return redirect("/home");
        }

        return view("register_lect");
    }

    function showList(){
        if(!Auth::user()->is_coord){
            return redirect("/home");
        }

        $data = lect::all();
        return view("view_lect_list", ["data"=>$data]);
    }

    function registerProcess(Request $req){
        if(!Auth::user()->is_coord){
            return redirect("/home");
        }

        $new_lect = new lect;
        $new_lect->id = $req->lect_id;
        $new_lect->name = $req->lect_name;
        $new_lect->contact = $req->lect_contact;
        $new_lect->password = $req->lect_password;
        $new_lect->is_coord = 0;
        $new_lect->save();
        return redirect("/lect");
    }

    function updateForm($id){
        if(!Auth::user()->is_coord){
            return redirect("/home");
        }

        $cur_lect = lect::find($id);
        return view("update_lect", ["cur"=>$cur_lect]);
    }

    function updateProcess(Request $req){

        if(!Auth::user()->is_coord){
            return redirect("/home");
        }

        $lect_upt = lect::find($req->lect_id);
        $lect_upt->id = $req->lect_id;
        $lect_upt->name = $req->lect_name;
        $lect_upt->contact = $req->lect_contact;
        $lect_upt->password = $req->lect_password;
        $lect_upt->is_coord = 0;
        $lect_upt->save();
        return redirect("/lect");
    }
    
    function deleteLect($id){
        if(!Auth::user()->is_coord){
            return redirect("/home");
        }

        $lect = lect::find($id);
        $lect->delete();
        
        //Check if lect is currently supervising
        DB::table('projects')
        ->where('supervisor_email', $id)
        ->update(['supervisor_email' => NULL]);

        DB::table('projects')
        ->where('examiner_email_one', $id)
        ->update(['examiner_email_one' => NULL]);

        DB::table('projects')
        ->where('examiner_email_two', $id)
        ->update(['examiner_email_two' => NULL]);

        return redirect("lect");
    }

    function resetForm($id){
        if(!Auth::user()->is_coord){
            return redirect("/home");
        }

        $cur_lect = lect::find($id);
        return view("lect_password_form", ["cur"=>$cur_lect]);
    }
}
